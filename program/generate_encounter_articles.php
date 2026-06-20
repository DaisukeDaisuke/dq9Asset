<?php

declare(strict_types=1);

/**
 * enc.txt から normal.txt / map.txt の数値表だけを再生成する。
 *
 * 記事は1セクションずつ読み、場所、画像、モンスター名、説明文をそのまま保持する。
 * 既存ファイルは上書きせず、既定では *_generated.txt に出力する。
 */

const TABLE_HEADING_PATTERN = '/^### [0-9A-Fa-f]+テーブル\s*$/u';

function bits(int $value, int $offset, int $width = 3): int
{
	return ($value >> $offset) & ((1 << $width) - 1);
}

/** @return array{enc: array<int, list<int>>, companion: array<int, list<int>>, group: array<int, list<int>>} */
function readEncounterDump(string $path): array
{
	$handle = fopen($path, 'rb');
	if($handle === false) {
		throw new RuntimeException("入力ファイルを開けません: {$path}");
	}

	$encounterId = null;
	$tableId = null;
	$result = ['enc' => [], 'companion' => [], 'group' => []];

	try {
		while (($line = fgets($handle)) !== false) {
			if(!preg_match('/^(enc_id|enc|id|34|0):\s*(?:0x)?([0-9a-f]+)\s*$/i', trim($line), $match)) {
				continue;
			}

			$value = (int) hexdec($match[2]);
			switch(strtolower($match[1])) {
				case 'enc_id':
					$encounterId = $value;
					break;
				case 'enc':
					if($encounterId === null) {
						throw new RuntimeException('enc_id より前に enc があります');
					}
					$result['enc'][$encounterId][] = $value;
					break;
				case 'id':
					$tableId = $value;
					break;
				case '34':
					if($tableId === null) {
						throw new RuntimeException('id より前に 34 テーブルがあります');
					}
					$result['companion'][$tableId][] = $value;
					break;
				case '0':
					if($tableId === null) {
						throw new RuntimeException('id より前に 0 テーブルがあります');
					}
					$result['group'][$tableId][] = $value;
					break;
			}
		}
	} finally {
		fclose($handle);
	}

	return $result;
}

/** @return list<string> */
function readMonsterNames(string $rows): array
{
	$names = [];
	if(!preg_match_all('/^\|\s*([^|]*?)\s*\|/m', $rows, $matches)) {
		return $names;
	}

	foreach($matches[1] as $name) {
		$names[] = trim($name);
	}
	return $names;
}

function percent(float $value): string
{
	return number_format($value, 4, '.', '');
}

/** @param list<string> $names @param list<int> $values */
function assertRowCount(array $names, array $values, int $tableId, string $kind): void
{
	if(count($names) !== count($values)) {
		$id = strtoupper(dechex($tableId));
		throw new RuntimeException("0x{$id} {$kind}表の行数が一致しません（記事: ".count($names)."、enc.txt: ".count($values).'）');
	}
}

/** @param list<string> $names @param list<int> $values */
function spawnRows(array $names, array $values, int $tableId, string $newline): string
{
	assertRowCount($names, $values, $tableId, '出現率');
	$weights = array_map(static fn(int $value): int => bits($value, 12), $values);
	$total = array_sum($weights);
	if($total <= 0) {
		throw new RuntimeException('出現率表の乱数幅が0です');
	}

	$start = 0;
	$rows = '';
	foreach($weights as $index => $weight) {
		$end = $start + $weight;
		$startPercent = $start / $total * 100;
		$endPercent = $end / $total * 100;
		$rows .= '|'.$names[$index].'|'.percent($startPercent).'%-'.percent($endPercent).'%|'.percent($endPercent - $startPercent).'%|'.$start.'-'.($end - 1).'|'.$newline;
		$start = $end;
	}
	return $rows;
}

/** @param list<string> $names @param list<int> $values */
function companionRows(array $names, array $values, int $tableId, string $newline): string
{
	assertRowCount($names, $values, $tableId, 'お供');

	// Cテーブルの値は各区間の終端として加算される。乱数0も出目なので母数は最大値+1。
	$maximum = array_sum(array_map(static fn(int $value): int => bits($value, 12), $values));
	$outcomeCount = $maximum + 1;
	$start = 0;
	$end = 0;
	$rows = '';
	foreach($values as $index => $value) {
		$end += bits($value, 12);
		$sectionPercent = ($end - $start + 1) / $outcomeCount * 100;
		$rows .= '| '.$names[$index].' | '.percent($start / $outcomeCount * 100).'%-'.percent(($end + 1) / $outcomeCount * 100).'% | '.percent($sectionPercent).'% | '.$start.'-'.$end.' | '.bits($value, 15).' | '.bits($value, 18).' | '.(bits($value, 18) - bits($value, 15)).' |'.$newline;
		$start = $end + 1;
	}
	return $rows;
}

/** @param list<string> $names @param list<int> $values */
function groupRows(array $names, array $values, int $tableId, string $newline): string
{
	assertRowCount($names, $values, $tableId, 'グループ');
	$rows = '';
	foreach($values as $index => $value) {
		$twoGroup = bits($value, 18);
		$threeGroupStart = $twoGroup + bits($value, 21);
		$total = $threeGroupStart + bits($value, 24);
		if($total <= 0) {
			throw new RuntimeException('グループ表の乱数幅が0です');
		}
		$min = bits($value, 12);
		$max = bits($value, 15);
		$rows .= '| '.$names[$index].' | '.percent($twoGroup / $total * 100).' | '.$twoGroup.'/'.$total.'/'.$threeGroupStart.'/'.$total.' | '.$min.' | '.$max.' | '.($max - $min).' |'.$newline;
	}
	return $rows;
}

/** @param list<string> $names @param list<int> $values */
function threeGroupRows(array $names, array $values, int $tableId, string $newline): string
{
	$withThreeGroups = array_values(array_filter($values, static fn(int $value): bool => bits($value, 24) > 0));
	assertRowCount($names, $withThreeGroups, $tableId, '3G');
	$rows = '';
	foreach($withThreeGroups as $index => $value) {
		$start = bits($value, 18) + bits($value, 21);
		$total = $start + bits($value, 24);
		$rows .= '| '.$names[$index].' | '.percent($start / $total * 100).' | '.percent(100).' |'.$newline;
	}
	return $rows;
}

/** @param array{enc: array<int, list<int>>, companion: array<int, list<int>>, group: array<int, list<int>>} $dump */
function replaceSectionTables(string $section, array $dump): string
{
	if(!preg_match('/^検索用:\s*0x([0-9a-f]+)\s*$/mi', $section, $idMatch)) {
		return $section;
	}
	$tableId = (int) hexdec($idMatch[1]);

	$pattern = '/^(?<header>\|[^\r\n]*\|)\R(?<separator>\|[ \t]*:?-{3,}:?[ \t]*(?:\|[ \t]*:?-{3,}:?[ \t]*)+\|?)\R(?<rows>(?:\|[^\r\n]*\|\R?)*)/m';
	$result = preg_replace_callback($pattern, static function(array $match) use ($dump, $tableId): string {
		$header = $match['header'];
		if(!str_contains($header, 'モンスター')) {
			return $match[0];
		}

		$newline = str_contains($match[0], "\r\n") ? "\r\n" : "\n";
		$names = readMonsterNames($match['rows']);
		if(str_contains($header, '| % |')) {
			$values = $dump['enc'][$tableId] ?? [];
			$rows = spawnRows($names, $values, $tableId, $newline);
		} elseif(str_contains($header, '2Gの最小数')) {
			$values = $dump['companion'][$tableId] ?? [];
			$rows = companionRows($names, $values, $tableId, $newline);
			$header = '| モンスター | 確率 | % | 内部的な値 | 2Gの最小数 | 2Gの最大数 | 乱数幅 |';
			$match['separator'] = '| --- | --- | --- | --- | --- | --- | --- |';
		} elseif(str_contains($header, '1Gの最小数')) {
			$values = $dump['group'][$tableId] ?? [];
			$rows = groupRows($names, $values, $tableId, $newline);
		} elseif(str_contains($header, '3Gの確率1')) {
			$values = $dump['group'][$tableId] ?? [];
			$rows = threeGroupRows($names, $values, $tableId, $newline);
		} else {
			return $match[0];
		}

		return $header.$newline.$match['separator'].$newline.$rows;
	}, $section);

	if($result === null) {
		throw new RuntimeException('記事の表を正規表現で処理できませんでした');
	}
	return $result;
}

function addStreamingBreaks(string $section): string
{
	$result = preg_replace_callback('/[^\r\n]+(?:\r\n|\n|\r|$)/', static function(array $match): string {
		$line = $match[0];
		preg_match('/(?:\r\n|\n|\r)$/', $line, $newlineMatch);
		$newline = $newlineMatch[0] ?? '';
		$content = $newline === '' ? $line : substr($line, 0, -strlen($newline));
		$trimmed = rtrim($content);

		if($trimmed === '' || str_starts_with($trimmed, '#') || str_ends_with($trimmed, '|') || str_ends_with($trimmed, '<br>')) {
			return $line;
		}
		return $content.'<br>'.$newline;
	}, $section);

	if($result === null) {
		throw new RuntimeException('改行タグを追加できませんでした');
	}
	return $result;
}

/** @param array{enc: array<int, list<int>>, companion: array<int, list<int>>, group: array<int, list<int>>} $dump */
function generateArticle(string $inputPath, ?string $outputPath, array $dump): int
{
	$input = fopen($inputPath, 'rb');
	if($input === false) {
		throw new RuntimeException("記事を開けません: {$inputPath}");
	}
	$output = $outputPath === null ? null : fopen($outputPath, 'wb');
	if($outputPath !== null && $output === false) {
		fclose($input);
		throw new RuntimeException("出力ファイルを開けません: {$outputPath}");
	}

	$section = '';
	$sectionCount = 0;
	try {
		while(($line = fgets($input)) !== false) {
			if(preg_match(TABLE_HEADING_PATTERN, rtrim($line, "\r\n")) === 1) {
				if($section !== '') {
					$generated = addStreamingBreaks(replaceSectionTables($section, $dump));
					if($output !== null) {
						fwrite($output, $generated);
					}
					$sectionCount++;
				}
				$section = $line;
			} elseif($section === '') {
				if($output !== null) {
					fwrite($output, $line);
				}
			} else {
				$section .= $line;
			}
		}

		if($section !== '') {
			$generated = addStreamingBreaks(replaceSectionTables($section, $dump));
			if($output !== null) {
				fwrite($output, $generated);
			}
			$sectionCount++;
		}
	} finally {
		fclose($input);
		if(is_resource($output)) {
			fclose($output);
		}
	}
	return $sectionCount;
}

function generatedPath(string $path): string
{
	$extension = pathinfo($path, PATHINFO_EXTENSION);
	$base = $extension === '' ? $path : substr($path, 0, -strlen($extension) - 1);
	return $base.'_generated'.($extension === '' ? '' : '.'.$extension);
}

function main(array $argv): int
{
	try {
	$args = array_slice($argv, 1);
	$checkOnly = false;
	if(($key = array_search('--check', $args, true)) !== false) {
		$checkOnly = true;
		array_splice($args, $key, 1);
	}

	$encPath = $args[0] ?? __DIR__.DIRECTORY_SEPARATOR.'enc.txt';
	$articlePaths = array_slice($args, 1);
	if($articlePaths === []) {
		$articlePaths = [
			__DIR__.DIRECTORY_SEPARATOR.'normal.txt',
			__DIR__.DIRECTORY_SEPARATOR.'map.txt',
		];
	}

	$dump = readEncounterDump($encPath);
	foreach($articlePaths as $articlePath) {
		$outputPath = $checkOnly ? null : generatedPath($articlePath);
		$count = generateArticle($articlePath, $outputPath, $dump);
		fwrite(STDOUT, basename($articlePath).": {$count} セクション".($checkOnly ? 'を検証' : 'を生成').PHP_EOL);
	}
		return 0;
	} catch(Throwable $exception) {
		fwrite(STDERR, $exception->getMessage().PHP_EOL);
		return 1;
	}
}

if(realpath($_SERVER['SCRIPT_FILENAME'] ?? '') === __FILE__) {
	exit(main($argv));
}
