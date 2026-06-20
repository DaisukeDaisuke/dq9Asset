<?php

declare(strict_types=1);

require_once __DIR__.DIRECTORY_SEPARATOR.'generate_encounter_articles.php';

const ARTICLE_TABLE_PATTERN = '/^(?<header>\|[^\r\n]*\|)\R(?<separator>\|[ \t]*:?-{3,}:?[ \t]*(?:\|[ \t]*:?-{3,}:?[ \t]*)+\|?)\R(?<rows>(?:\|[^\r\n]*\|\R?)*)/m';

/**
 * index::register と巨大なモンスター名配列の代わりに、現記事を正として情報を集める。
 *
 * @param array{enc: array<int, list<int>>, companion: array<int, list<int>>, group: array<int, list<int>>} $dump
 * @param array<int, array{position: ?string, maxCount: ?int, image: ?string}> $index
 * @param array<int, string> $monsterNames
 */
function collectArticleIndex(string $path, array $dump, array &$index, array &$monsterNames): int
{
	$handle = fopen($path, 'rb');
	if($handle === false) {
		throw new RuntimeException("記事を開けません: {$path}");
	}

	$section = '';
	$count = 0;
	$consume = static function(string $text) use ($dump, &$index, &$monsterNames, &$count): void {
		if(!preg_match('/^検索用:\s*0x([0-9a-f]+)\s*(?:<br>)?$/mi', $text, $idMatch)) {
			return;
		}
		$tableId = (int) hexdec($idMatch[1]);
		$position = preg_match('/^場所:\s*(.*?)\s*$/mi', $text, $match) ? trim((string) preg_replace('/<br>\s*$/i', '', $match[1])) : null;
		$maxCount = preg_match('/^最大数:\s*(\d+)\s*(?:<br>)?$/mi', $text, $match) ? (int) $match[1] : null;
		$image = preg_match('/^(\[f:id:[^\r\n]+?\])(?:<br>)?\s*$/mi', $text, $match) ? $match[1] : null;
		$index[$tableId] = ['position' => $position, 'maxCount' => $maxCount, 'image' => $image];

		if(preg_match_all(ARTICLE_TABLE_PATTERN, $text, $tables, PREG_SET_ORDER)) {
			foreach($tables as $table) {
				$header = $table['header'];
				if(str_contains($header, '| % |')) {
					$values = $dump['enc'][$tableId] ?? [];
				} elseif(str_contains($header, '2Gの最小数')) {
					$values = $dump['companion'][$tableId] ?? [];
				} elseif(str_contains($header, '1Gの最小数')) {
					$values = $dump['group'][$tableId] ?? [];
				} else {
					continue;
				}

				$names = readMonsterNames($table['rows']);
				assertRowCount($names, $values, $tableId, '記事インデックス');
				foreach($values as $key => $value) {
					$monsterNames[$value & 0xfff] = $names[$key];
				}
			}
		}
		$count++;
	};

	try {
		while(($line = fgets($handle)) !== false) {
			if(preg_match(TABLE_HEADING_PATTERN, rtrim($line, "\r\n")) === 1) {
				if($section !== '') {
					$consume($section);
				}
				$section = $line;
			} elseif($section !== '') {
				$section .= $line;
			}
		}
		if($section !== '') {
			$consume($section);
		}
	} finally {
		fclose($handle);
	}
	return $count;
}

/** @param array<int, string> $names */
function monsterName(int $id, array $names): string
{
	return $names[$id] ?? '0x'.strtoupper(dechex($id));
}

function trapMonster(int $id): bool
{
	return $id === 0x26 || $id === 0x27 || $id === 0x28;
}

/** @param array{position: ?string, maxCount: ?int, image: ?string}|null $meta */
function addArticleMeta(array &$table, ?array $meta): void
{
	$table['position'] = $meta['position'] ?? null;
	$table['maxCount'] = $meta['maxCount'] ?? null;
	$table['image'] = $meta['image'] ?? null;
}

/** @param array<int, list<int>> $tables @param array<int, string> $names @param array<int, array{position: ?string, maxCount: ?int, image: ?string}> $index */
function buildEncounterJson(array $tables, array $names, array $index): array
{
	$result = [];
	foreach($tables as $tableId => $values) {
		if($tableId >= 0x114 && $tableId <= 0x117) {
			continue;
		}
		$weights = array_map(static fn(int $value): int => bits($value, 12), $values);
		$total = array_sum($weights);
		if($total <= 0) {
			continue;
		}
		$start = 0;
		$rows = "| モンスター | 確率 | % | 内部的な値 |\n|--------|--------|--------|--------|\n";
		$data = [];
		foreach($values as $key => $value) {
			$id = $value & 0xfff;
			$end = $start + $weights[$key];
			$startPercent = $start / $total * 100;
			$endPercent = $end / $total * 100;
			$name = monsterName($id, $names);
			$rows .= '|'.$name.'|'.percent($startPercent).'%-'.percent($endPercent).'%|'.percent($endPercent - $startPercent).'%|'.$start.'-'.($end - 1)."|\n";
			$data[] = [
				'monsterId' => $id,
				'monsterName' => $name,
				'startPercent' => percent($startPercent),
				'endPercent' => percent($endPercent),
				'percent' => percent($endPercent - $startPercent),
				'start' => $start,
				'end' => $end - 1,
				'maxRand' => $total,
				'trapMonster' => trapMonster($id),
			];
			$start = $end;
		}
		$result[$tableId] = ['id' => '0x'.dechex($tableId), 'maxRand' => $total, 'step' => 100 / $total, 'toString' => $rows, 'data' => $data];
		addArticleMeta($result[$tableId], $index[$tableId] ?? null);
	}
	ksort($result);
	return ['version' => '2.0.0', 'explanation' => "This is the probability that a monster will spawn on the field.\nTrap monsters require special processing.", 'main' => $result];
}

/** @param array<int, list<int>> $tables @param array<int, string> $names @param array<int, array{position: ?string, maxCount: ?int, image: ?string}> $index */
function buildCompanionJson(array $tables, array $names, array $index): array
{
	$result = [];
	foreach($tables as $tableId => $values) {
		$maximum = array_sum(array_map(static fn(int $value): int => bits($value, 12), $values));
		$outcomeCount = $maximum + 1;
		$start = 0;
		$end = 0;
		$rows = "\n\n| モンスター | 確率 | 確率 | 内部的な値 | 2Gの最小数 | 2Gの最大数 | 乱数幅 |\n| --- | --- | --- | --- | --- | --- | --- |\n";
		$main = [];
		foreach($values as $value) {
			$id = $value & 0xfff;
			$end += bits($value, 12);
			$startPercent = $start / $outcomeCount * 100;
			$endPercent = ($end + 1) / $outcomeCount * 100;
			$sectionPercent = ($end - $start + 1) / $outcomeCount * 100;
			$min = bits($value, 15);
			$max = bits($value, 18);
			$name = monsterName($id, $names);
			$rows .= '| '.$name.' | '.percent($startPercent).'%-'.percent($endPercent).'% | '.percent($sectionPercent).'% | '.$start.'-'.$end.' | '.$min.' | '.$max.' | '.($max - $min)." |\n";
			$main[] = [
				'rand' => $end,
				'monsterId' => $id,
				'displayName' => $name,
				'min' => $min,
				'max' => $max,
				'countRand' => $max - $min,
				'trapMonster' => trapMonster($id),
				'StartPercent' => percent($startPercent),
				'endPercent' => percent($endPercent),
				'percent' => percent($sectionPercent),
			];
			$start = $end + 1;
		}
		$result[$tableId] = ['main' => $main, 'maxRand' => $outcomeCount];
		addArticleMeta($result[$tableId], $index[$tableId] ?? null);
		$result[$tableId]['toString'] = $rows;
	}
	ksort($result);
	return ['version' => '2.0.0', 'explanation' => "2G and 3G companion list.\nTrap monsters require special processing.", 'main' => $result];
}

/** @param array<int, list<int>> $tables @param array<int, string> $names @param array<int, array{position: ?string, maxCount: ?int, image: ?string}> $index */
function buildGroupJson(array $tables, array $names, array $index): array
{
	$result = [];
	foreach($tables as $tableId => $values) {
		$main = [];
		$rows = "\n\n| モンスター | 確率 | 内部的な値 | 1Gの最小数 | 1Gの最大数 | 乱数幅 |\n| --- | --- | --- | --- | --- | --- |\n";
		$threeRows = [];
		foreach($values as $value) {
			$id = $value & 0xfff;
			$twoGroup = bits($value, 18);
			$threeGroupStart = $twoGroup + bits($value, 21);
			$total = $threeGroupStart + bits($value, 24);
			if($total <= 0) {
				continue;
			}
			$min = bits($value, 12);
			$max = bits($value, 15);
			$name = monsterName($id, $names);
			$percent2 = percent($twoGroup / $total * 100);
			$has3g = bits($value, 24) > 0;
			$percent3 = $has3g ? percent($threeGroupStart / $total * 100) : null;
			$rows .= '| '.$name.' | '.$percent2.' | '.$twoGroup.'/'.$total.'/'.$threeGroupStart.'/'.$total.' | '.$min.' | '.$max.' | '.($max - $min)." |\n";
			if($has3g) {
				$threeRows[] = '| '.$name.' | '.$percent3.' | '.percent(100)." |\n";
			}
			$main[] = [
				'groupId' => $tableId.'/'.$twoGroup.'/'.$total.'/'.$threeGroupStart.'/'.$total.'/'.$min.'/'.$max,
				'tableId' => $tableId,
				'monsterId' => $id,
				'displayName' => $name,
				'percent2' => $percent2,
				'percent3' => $percent3,
				'data' => ['2g' => $twoGroup, 'max' => $total, '3g' => $threeGroupStart, '3gmax' => $total],
				'min' => $min,
				'max' => $max,
				'countRand' => $max - $min,
				'has2g' => $percent2 !== '100.0000',
				'has3g' => $has3g,
				'trapMonster' => trapMonster($id),
				'name' => $index[$tableId]['position'] ?? null,
			];
		}
		if($threeRows !== []) {
			$rows .= "\n| モンスター | 3Gの確率1(以上) | 3Gの確率2(かつ以下) |\n| --- | --- | --- |\n".implode('', $threeRows);
		}
		$result[$tableId] = ['main' => $main];
		addArticleMeta($result[$tableId], $index[$tableId] ?? null);
		$result[$tableId]['toString'] = $rows;
	}
	ksort($result);
	return ['version' => '5.0.0', 'explanation' => 'This is a list of probabilities that the monster 2G or 3G will appear.', 'main' => $result];
}

function writeMergedJson(string $path, array $data): void
{
	$json = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR);
	if(file_put_contents($path, $json.PHP_EOL) === false) {
		throw new RuntimeException("JSONを書き込めません: {$path}");
	}
}

try {
	$checkOnly = in_array('--check', $argv, true);
	$dump = readEncounterDump(__DIR__.DIRECTORY_SEPARATOR.'enc.txt');
	$index = [];
	$monsterNames = [];
	$sectionCount = 0;
	foreach([__DIR__.DIRECTORY_SEPARATOR.'normal.txt', __DIR__.DIRECTORY_SEPARATOR.'map.txt'] as $article) {
		$sectionCount += collectArticleIndex($article, $dump, $index, $monsterNames);
	}

	$outputs = [
		'enc.json' => buildEncounterJson($dump['enc'], $monsterNames, $index),
		'companion.json' => buildCompanionJson($dump['companion'], $monsterNames, $index),
		'2Gappear.json' => buildGroupJson($dump['group'], $monsterNames, $index),
	];
	if(!$checkOnly) {
		foreach($outputs as $filename => $data) {
			writeMergedJson(__DIR__.DIRECTORY_SEPARATOR.$filename, $data);
		}
	}
	fwrite(STDOUT, count($outputs).'ファイル、'.$sectionCount.'セクション'.($checkOnly ? 'を検証' : 'を生成').PHP_EOL);
} catch(Throwable $exception) {
	fwrite(STDERR, $exception->getMessage().PHP_EOL);
	exit(1);
}
