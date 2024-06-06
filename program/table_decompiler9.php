<?php

const IS_EN = true;

class s{
	public static function get(int $id){
		$list_en = [
			0x1 => "Slime",
			0x10a => "Slime",
			0x10b => "Slime",
			0x122 => "Slime",
			0x123 => "Slime",
			0x39 => "Cruelcumber",
			0x124 => "Cruelcumber",
			0x38 => "Teeny sanguini",
			0x3f => "Sacksquatch",
			0x20 => "Batterfly",
			0x4 => "Dracky",
			0x17 => "Bodkin archer",
			0x2b => "Bag o laughs",
			0x14 => "Mecha-mynah",
			0x7 => "Firespirit",
			0x1e => "Spirit",
			0x23 => "Winkster",
			0x1c => "Hammerhood",
			0x2 => "She-slime",
			0x9 => "Funghoul",
			0x1a => "Bubble slime",
			0x3c => "Wooper trooper",
			0x21 => "Betterfly",
			0xc => "Meowgician",
			0x8e => "Ragged reaper",
			0x50 => "Gastropog",
			0x1d => "Brownie",
			0x90 => "Boppin badger",
			0x5 => "Drackmage",
			0x18 => "Bodkin fletcher",
			0x71 => "Ram raider",
			0x2d => "Cumaulus",
			0x55 => "Skeleton",
			0xf => "Healslime",
			0x24 => "Blinkster",
			0x30 => "Leery lout",
			0x29 => "Lunatick",
			0x4e => "Leafy larrikin",
			0x16 => "Clockwork cuckoo",
			0x33 => "Slugger",
			0x93 => "Chariot chappie",
			0xa => "Morphean mushroom",
			0x8 => "Lost soul",
			0x58 => "Flython",
			0x91 => "Badger mager",
			0x100 => "Crabid",
			0x1f => "Mean spirit",
			0x84 => "Magus",
			0x6c => "Mummy boy",
			0x53 => "Earthenwarrior",
			0x3 => "Metal slime",
			0x129 => "Metal slime",
			0x19 => "Bodkin kowyer",
			0x7a => "Slime knight",
			0x69 => "Cyclown",
			0x81 => "Badboon",
			0x4b => "Slime stack",
			0x7e => "Mudraker",
			0xb => "Mushroom mage",
			0x6 => "Drackyma",
			0x66 => "Walking corpse",
			0x25 => "Jinkster",
			0x77 => "Restless armour",
			0x9d => "Knocktopus",
			0x8c => "Chimaera",
			0x3d => "Salamarauder",
			0x10 => "Man o war",
			0x95 => "Mortoad",
			0x22 => "Dread admiral",
			0x3a => "Zumeanie",
			0x4f => "Bud brother",
			0x6a => "Spinchilla",
			0x63 => "Bewarewolf",
			0xd => "Clawcerer",
			0x72 => "Rampage",
			0x5b => "Beakon",
			0xc8 => "Mad moai",
			0xa4 => "Trigertaur",
			0x75 => "Grinade",
			0x67 => "Toxic zombie",
			0x7b => "Metal slime knight",
			0x8d => "Hocus chimaera",
			0x8a => "Treeface",
			0x10d => "Stone golem",
			0xba => "Stone golem",
			0x32 => "Gum shield",
			0x36 => "Pink sanguini",
			0x65 => "Scarewolf",
			0x82 => "Big badboon",
			0x11 => "Medislime",
			0x85 => "Shaman",
			0x5c => "Weaken beakon",
			0x2a => "Raving lunatick",
			0xb1 => "Hunter mech",
			0x104 => "Riptide",
			0x4c => "Metal medley",
			0xb3 => "King slime",
			0xcf => "Claw hammer",
			0x9e => "Shocktopus",
			0x3e => "Axolhotl",
			0x98 => "Parched peckerel",
			0xd0 => "Power hammer",
			0xbb => "Gold golem",
			0x96 => "Expload",
			0x6d => "Mummy",
			0x7f => "Admirer",
			0x5e => "Lesionnaire",
			0x59 => "Diethon",
			0xe => "Purrestidigitator",
			0x9f => "Manguini",
			0x87 => "Mandrake major",
			0x3b => "Scourgette",
			0x6f => "Wyrtle",
			0x101 => "Crabber dabber doo",
			0x92 => "Badja",
			0x51 => "Giddy gastropog",
			0x8b => "Treevil",
			0x68 => "Ghoul",
			0x15 => "Robo-robin",
			0x7c => "Swinoceros",
			0x11d => "Swinoceros",
			0x99 => "Peckerel",
			0x73 => "Battering ram",
			0x74 => "Rockbomb",
			0x83 => "Brainy badboon",
			0x110 => "Drackal",
			0xbd => "Drackal",
			0xa1 => "Gruffon",
			0x86 => "Sorcerer",
			0x61 => "Cheeky tiki",
			0x5f => "Deadcurion",
			0x78 => "Infernal armour",
			0xdc => "Troll",
			0xe8 => "Shivery shrubbery",
			0x64 => "Tearwolf",
			0x54 => "Brreatherwarrior",
			0xe9 => "Apeckalypse",
			0xa2 => "Great gruffon",
			0xa5 => "White trigertaur",
			0x12 => "Sootheslime",
			0x103 => "cikiller",
			0x62 => "Teaky mask",
			0x8f => "Raving reaper",
			0xcd => "Wight priest",
			0xca => "Sculptrice",
			0xff => "Handsome crab",
			0x111 => "Handsome crab",
			0x5a => "Sail serpent",
			0x31 => "Grim grinner",
			0x34 => "Sluggernaut",
			0x7d => "Splatterhorn",
			0x11e => "Whirly girly",
			0x6b => "Whirly girly",
			0xa3 => "Gramarye gruffon",
			0x56 => "Skeleton soldier",
			0xa0 => "Bloody manguini",
			0x6e => "Blood mummy",
			0x117 => "Harmour",
			0xc0 => "Harmour",
			0xd4 => "Python priest",
			0xcb => "Sculpture vulture",
			0x10e => "Living statue",
			0xac => "Living statue",
			0x2c => "Goodybag",
			0xae => "Drakularge",
			0x1b => "Liquid metal slime",
			0x126 => "Liquid metal slime",
			0xa7 => "Moosifer",
			0xbe => "Drastic drackal",
			0xc5 => "Terrorhawk",
			0xd9 => "Cyclops",
			0x112 => "Cyclops",
			0xb6 => "Cumulus rex",
			0x76 => "Bomboulder",
			0x40 => "Bagma",
			0xbc => "Golem",
			0x106 => "Seasaur",
			0x2e => "Hell niño",
			0x11b => "Hell niño",
			0x94 => "Corrupt carter",
			0x80 => "Live lava",
			0x88 => "Mandrake marauder",
			0xc9 => "Mega moai",
			0xdf => "Magmalice",
			0xa9 => "Green dragon",
			0x107 => "Abyss diver",
			0x125 => "Stenchurion",
			0x60 => "Stenchurion",
			0x52 => "Gloomy gastropog",
			0x57 => "Dark skeleton",
			0xb2 => "Killing machine",
			0xbf => "Dreadful drackal",
			0x79 => "Lethal armour",
			0x12a => "Lethal armour",
			0x2f => "Freezing fog",
			0xad => "Stone guardian",
			0x113 => "Stone guardian",
			0xdd => "Boss troll",
			0x97 => "Blastoad",
			0x10f => "Blastoad",
			0x119 => "Fright knight",
			0xc3 => "Fright knight",
			0xce => "Wight king",
			0x105 => "Claws",
			0x11a => "Aggrosculpture",
			0xcc => "Aggrosculpture",
			0x89 => "Mandrake marshal",
			0x118 => "Bad karmour",
			0xc1 => "Bad karmour",
			0x70 => "Wyrtloise",
			0x102 => "King crab",
			0x37 => "Genie sanguini",
			0xb7 => "Cumulus vex",
			0xaa => "Red dragon",
			0xda => "Gigantes",
			0x5d => "Belisha beakon",
			0xf3 => "Charmour",
			0x13 => "Cureslime",
			0xde => "Great troll",
			0xd5 => "Cobra cardinal",
			0xc6 => "Prism peacock",
			0xc4 => "Night knight",
			0x114 => "Drakulard",
			0xaf => "Drakulard",
			0xa8 => "Barbatos",
			0xe0 => "Firn fiend",
			0xa6 => "Sick trigertaur",
			0x26 => "Cannibox",
			0x27 => "Mimic",
			0xb4 => "King cureslime",
			0x4d => "Gem jamboree",
			0x35 => "Sluggerslaught",
			0x109 => "Terror troll",
			0x116 => "Terror troll",
			0xed => "Cosmic chimaera",
			0x14e => "Wishmaster",
			0xf1 => "Cumulus hex",
			0x147 => "Stale whale",
			0xb5 => "Metal king slime",
			0x127 => "Metal king slime",
			0xe2 => "Slionheart",
			0xd7 => "Godsteed",
			0xeb => "Wonder wyrtle",
			0x149 => "Widows pique",
			0x141 => "Octagoon",
			0xb8 => "Darkonium slime",
			0xef => "Freaky tiki",
			0xc2 => "Alamour",
			0xfe => "Boa bishop",
			0x14a => "Cyber spider",
			0xe6 => "Alphyn",
			0xb9 => "Gem slime",
			0xe4 => "AU-1000",
			0xe5 => "Void droid",
			0xf2 => "Platinum king jewel",
			0x128 => "Platinum king jewel",
			0x143 => "Cannibelle",
			0xfa => "Grim reaper",
			0xf7 => "Wight emperor",
			0xf6 => "Grrrgoyle",
			0x28 => "Pandoras box",
			0x145 => "Uncommon cold",
			0xec => "Geothaum",
			0xf4 => "Blight knight",
			0xfc => "Flamin drayman",
			0xd6 => "antamount",
			0xf9 => "Barriearthenwarrior",
			0xc7 => "Bird of terrordise",
			0x144 => "Scarlet fever",
			0x11c => "Scarlet fever",
			0x11f => "Scarlet fever",
			0x120 => "Scarlet fever",
			0x121 => "Scarlet fever",
			0x14d => "Hells gatekeeper",
			0xab => "Rashaverak",
			0xee => "Master moosifer",
			0xe7 => "Vermil lion",
			0x115 => "Vermil lion",
			0x14b => "Slugly betsy",
			0xf5 => "Moai minstrel",
			0xf8 => "Boogie manguini",
			0xf0 => "Mandrake monarch",
			0xfb => "Bling badger",
			0x10c => "Prime slime",
			0xfd => "Hammer horror",
			0xb0 => "Drakulord",
			0x148 => "Pale whale",
			0x108 => "Seavern",
			0x12c => "Hexagoon",
			0x12d => "Wight Knight",
			0x12e => "Morag",
			0x12f => "Ragin Contagion",
			0x130 => "Master of Nuun",
			0x15b => "Lleviathan",
			0x131 => "Lleviathan",
			0x132 => "Garth Goyle",
			0x133 => "Tyrantula",
			0x134 => "Grand Lizzier",
			0x135 => "Larstastnaras",
			0x2eb => "Dreadmaster",
			0x136 => "Dreadmaster",
			0x137 => "Gadrongo",
			0x158 => "Goreham-Hogg",
			0x139 => "Goreham-Hogg",
			0x159 => "Hootingham-Gore",
			0x13a => "Hootingham-Gore",
			0x13b => "Goresby-Purrvis",
			0x15a => "Goresby-Purrvis",
			0x13c => "King Godwym",
			0x13d => "King Godwym",
			0x2ec => "King Godwym",
			0x2ed => "King Godwym",
			0x13e => "Barbarus",
			0x2ee => "Barbarus",
			0x13f => "Corvus",
			0x140 => "Corvus",
			0x2ef => "Corvus",
			0x2f0 => "Corvus",
			0x2f1 => "Corvus",
			0x2f2 => "Corvus",
			0x2f3 => "Corvus",
			0x321 => "Corvus",
			0x153 => "Yore",
			0x2fa => "Yore",
			0x2fb => "Yore",
			0x155 => "Rover",
			0x2f8 => "King Godfrey",
			0x156 => "King Godfrey",
			0x2f9 => "Tyrannosaura Wrecks",
			0x157 => "Tyrannosaura Wrecks",
			0x154 => "Nodoph",
			0xd8 => "Equinox",
			0xea => "Nemean",
			0xe1 => "Shogum",
			0xe3 => "Trauminator",
			0x14c => "Elusid",
			0x142 => "Sir Sanguinus",
			0xdb => "Atlas",
			0x14f => "Hammibal",
			0x150 => "Fowleye",
			0x151 => "Excalipurr",
			0x2fc => "Excalipurr",
			0x146 => "Tyrannosaurus Wrecks",
			0x2f4 => "Tyrannosaurus Wrecks",
			0x2f5 => "Tyrannosaurus Wrecks",
			0x2f6 => "Greygnarl",
			0x2f7 => "Greygnarl",
			0x152 => "Greygnarl",
			0x138 => "Greygnarl",
			0x1f4 => "Dragonlord",
			0x258 => "Dragonlord",
			0x259 => "Dragonlord",
			0x1f5 => "Malroth",
			0x25a => "Malroth",
			0x25b => "Malroth",
			0x25c => "Malroth",
			0x25d => "Malroth",
			0x1f6 => "Baramos",
			0x25e => "Baramos",
			0x25f => "Baramos",
			0x260 => "Baramos",
			0x261 => "Baramos",
			0x1f7 => "Zoma",
			0x262 => "Zoma",
			0x263 => "Zoma",
			0x264 => "Zoma",
			0x265 => "Zoma",
			0x1f8 => "Psaro",
			0x266 => "Psaro",
			0x267 => "Psaro",
			0x268 => "Psaro",
			0x269 => "Psaro",
			0x26a => "Psaro",
			0x26b => "Psaro",
			0x26c => "Psaro",
			0x1f9 => "Estark",
			0x26d => "Estark",
			0x26e => "Estark",
			0x26f => "Estark",
			0x270 => "Estark",
			0x271 => "Estark",
			0x272 => "Estark",
			0x1fa => "Nimzo",
			0x273 => "Nimzo",
			0x274 => "Nimzo",
			0x275 => "Nimzo",
			0x276 => "Nimzo",
			0x277 => "Nimzo",
			0x1fb => "Murdaw",
			0x278 => "Murdaw",
			0x279 => "Murdaw",
			0x27a => "Murdaw",
			0x27b => "Murdaw",
			0x27c => "Murdaw",
			0x27d => "Murdaw",
			0x1fc => "Mortamor",
			0x27e => "Mortamor",
			0x27f => "Mortamor",
			0x280 => "Mortamor",
			0x281 => "Mortamor",
			0x282 => "Mortamor",
			0x283 => "Mortamor",
			0x301 => "Nokturnus",
			0x302 => "Nokturnus",
			0x303 => "Nokturnus",
			0x304 => "Nokturnus",
			0x305 => "Nokturnus",
			0x306 => "Nokturnus",
			0x307 => "Nokturnus",
			0x202 => "Nokturnus",
			0x1ff => "Orgodemir",
			0x284 => "Orgodemir",
			0x285 => "Orgodemir",
			0x286 => "Orgodemir",
			0x287 => "Orgodemir",
			0x288 => "Orgodemir",
			0x28b => "Dhoulmagus",
			0x28c => "Dhoulmagus",
			0x28d => "Dhoulmagus",
			0x200 => "Dhoulmagus",
			0x289 => "Dhoulmagus",
			0x28a => "Dhoulmagus",
			0x28e => "Rhapthorne",
			0x28f => "Rhapthorne",
			0x290 => "Rhapthorne",
			0x291 => "Rhapthorne",
			0x292 => "Rhapthorne",
			0x293 => "Rhapthorne",
			0x294 => "Rhapthorne",
			0x201 => "Rhapthorne",
			0x308 => "Mortamors Left Claw",
			0x309 => "Mortamors Left Claw",
			0x1fd => "Mortamors Left Claw",
			0x30a => "Mortamors Right Claw",
			0x30b => "Mortamors Right Claw",
			0x1fe => "Mortamors Right Claw",
			0x320 => "aquila",
			0x384 => "debug sacksquach?",
		];
		$list_jp = [
			0x1 => "スライム(0x1)",
			0x10a => "スライム(bloomingdale)",
			0x10b => "スライム(アユルダーマとう)",
			0x122 => "スライム(0x122)",
			0x123 => "スライム(0x123)",
			0x39 => "ズッキーニャ(0x39)",
			0x124 => "ズッキーニャ(0x124)",
			0x38 => "モーモン",
			0x3f => "ドロザラー",
			0x20 => "じんめんちょう",
			0x4 => "ドラキー",
			0x17 => "リリパット",
			0x2b => "わらいぶくろ",
			0x14 => "メタッピー",
			0x7 => "メラゴースト",
			0x1e => "ゆうれい",
			0x23 => "みならいあくま",
			0x1c => "おおきづち",
			0x2 => "スライムベス",
			0x9 => "おばけキノコ",
			0x1a => "バブルスライム",
			0x3c => "ウパソルジャー",
			0x21 => "ひとくいが",
			0xc => "ねこまどう",
			0x8e => "かまっち",
			0x50 => "デンデンがえる",
			0x1d => "ブラウニー",
			0x90 => "ポンポコだぬき",
			0x5 => "タホドラキー",
			0x18 => "どくやずきん",
			0x71 => "マッドオックス",
			0x2d => "ギズモ",
			0x55 => "がいこつ",
			0xf => "ホイミスライム",
			0x24 => "ベビーマジシャン",
			0x30 => "シールドこぞう",
			0x29 => "メーダ",
			0x4e => "もみじこぞう",
			0x16 => "ガチャコッコ",
			0x33 => "テンツク",
			0x93 => "とっしんこぞう",
			0xa => "マタンゴ",
			0x8 => "さまようたましい",
			0x58 => "ウィングスネーク",
			0x91 => "メイジポンポコ",
			0x100 => "ぐんたいガニ",
			0x1f => "しにがみ",
			0x84 => "まじゅつし",
			0x6c => "ミイラ男",
			0x53 => "はにわナイト",
			0x3 => "メタルスライム(normal)",
			0x129 => "メタルスライム(スペクタクルショー)",
			0x19 => "アローインプ",
			0x7a => "スライムナイト",
			0x69 => "かまいたち",
			0x81 => "マンドリル",
			0x4b => "スライムタワー",
			0x7e => "ドロヌーバ",
			0xb => "マージマタンゴ",
			0x6 => "ドラキーマ",
			0x66 => "くさった死体",
			0x25 => "ひとつめピエロ",
			0x77 => "さまようよろい",
			0x9d => "ニードルオクト",
			0x8c => "キメラ",
			0x3d => "かいぞくウーパー",
			0x10 => "しびれくらげ",
			0x95 => "ガマキャノン",
			0x22 => "しびれあげは",
			0x3a => "ぶっちズキーニャ",
			0x4f => "まだらイチョウ",
			0x6a => "うずしおキング",
			0x63 => "リカント",
			0xd => "ジャガーメイジ",
			0x72 => "ゴートドン",
			0x5b => "おおくちばし",
			0xc8 => "ビッグモアイ",
			0xa4 => "タイガーランス",
			0x75 => "スマイルロック",
			0x67 => "どくどくゾンビ",
			0x7b => "メタルライダー",
			0x8d => "メイジキメラ",
			0x8a => "じんめんじゅ",
			0x10d => "ストーンマン(0x10D)",
			0xba => "ストーンマン(0x0BA)",
			0x32 => "ビッグフェイス",
			0x36 => "ピンクモーモン",
			0x65 => "リカントマムル",
			0x82 => "バブーン",
			0x11 => "ベホイミスライム",
			0x85 => "きとうし",
			0x5c => "デッドペッカー",
			0x2a => "メーダロード",
			0xb1 => "メタルハンター",
			0x104 => "オーシャンクロー",
			0x4c => "メタルブラザーズ",
			0xb3 => "キングスライム",
			0xcf => "ヘルマリーン",
			0x9e => "オクトスパイカー",
			0x3e => "ウパパロン",
			0x98 => "デザートランナー",
			0xd0 => "サンドシャーク",
			0xbb => "ゴールドマン",
			0x96 => "デザートタンク",
			0x6d => "マミー",
			0x7f => "ジェリーマン",
			0x5e => "がいこつ兵",
			0x59 => "ヘルバイパー",
			0xe => "ベンガルクーン",
			0x9f => "アーゴンデビル",
			0x87 => "リザードマン",
			0x3b => "ブラックベジター",
			0x6f => "ガメゴン",
			0x101 => "じごくのハサミ",
			0x92 => "ブラックタヌー",
			0x51 => "メダパニつむり",
			0x8b => "ウドラー",
			0x68 => "グール",
			0x15 => "アイアンクック",
			0x7c => "突げきホーン(0x7C)",
			0x11d => "突げきホーン(0x11D)",
			0x99 => "アサシンエミュー",
			0x73 => "ビッグホーン",
			0x74 => "ばくだん岩",
			0x83 => "ヒババンゴ",
			0x110 => "ストロングアニマル(0x110)",
			0xbd => "ストロングアニマル(0xBD)",
			0xa1 => "ヌボーン",
			0x86 => "ようじゅつし",
			0x61 => "ガオン",
			0x5f => "しにがみ兵",
			0x78 => "じごくのよろい",
			0xdc => "トロル",
			0xe8 => "デビルスノー",
			0x64 => "キラーリカント",
			0x54 => "ふゆしょうぐん",
			0xe9 => "ランドンクイナ",
			0xa2 => "ビッグボック",
			0xa5 => "ホワイトランサー",
			0x12 => "ベホイムスライム",
			0x103 => "アイスビックル",
			0x62 => "トーテムキラー",
			0x8f => "アサシンドール",
			0xcd => "デスプリースト",
			0xca => "ヘルビースト",
			0xff => "ガニラス(0xFF)",
			0x111 => "ガニラス(0x111)",
			0x5a => "オーシャンナーガ",
			0x31 => "ダークホビット",
			0x34 => "スーパーテンツク",
			0x7d => "ライノキング",
			0x11e => "ライノキング",
			0x6b => "レッドサイクロン",
			0xa3 => "アロダイタス",
			0x56 => "死霊の騎士",
			0xa0 => "ブラッドアーゴン",
			0x6e => "ブラッドマミー",
			0x117 => "デビルアーマー(0x117)",
			0xc0 => "デビルアーマー(0xC0)",
			0xd4 => "スネークロード",
			0xcb => "リビングスタチュー",
			0x10e => "うごくせきぞう(0x10E)",
			0xac => "うごくせきぞう(0xAC)",
			0x2c => "おどるほうせき",
			0xae => "ギガントヒルズ",
			0x1b => "はぐれメタル(通常)",
			0x126 => "はぐれメタル(スペクタクルショー)",
			0xa7 => "アンクルホーン",
			0xbe => "ヘルジャッカル",
			0xc5 => "マッドファルコン",
			0xd9 => "サイクロプス(0xD9)",
			0x112 => "サイクロプス(0x112)",
			0xb6 => "くもの大王",
			0x76 => "メガザルロック",
			0x40 => "ようがんピロー",
			0xbc => "ゴーレム",
			0x106 => "ギャオース",
			0x2e => "ヒートギズモ(0x2E)",
			0x11b => "ヒートギズモ(0x11B)",
			0x94 => "エビルチャリオット",
			0x80 => "マグマロン",
			0x88 => "りゅう兵士",
			0xc9 => "ゴードンヘッド",
			0xdf => "ようがんまじん",
			0xa9 => "グリーンドラゴン",
			0x107 => "ヘルダイバー",
			0x125 => "ゾンビナイト(0x125)",
			0x60 => "ゾンビナイト(0x60)",
			0x52 => "ダークデンデン",
			0x57 => "影の騎士",
			0xb2 => "キラーマシン",
			0xbf => "スケアリードッグ",
			0x79 => "キラーアーマー(0x79)",
			0x12a => "キラーアーマー(0x12A)",
			0x2f => "フロストギズモ",
			0xad => "だいまじん(0xAD)",
			0x113 => "だいまじん(0x113)",
			0xdd => "ボストロール",
			0x97 => "キャノンキング(0x97)",
			0x10f => "キャノンキング(0x10F)",
			0x119 => "ナイトリッチ(0x119)",
			0xc3 => "ナイトリッチ(0xC3)",
			0xce => "ワイトキング",
			0x105 => "クローハンズ",
			0x11a => "ウィングデビル(0x11A)",
			0xcc => "ウィングデビル(0xCC)",
			0x89 => "シュプリンガー",
			0x118 => "てっこうまじん(0x118)",
			0xc1 => "てっこうまじん(0xC1)",
			0x70 => "ガメゴンロード",
			0x102 => "キラークラブ",
			0x37 => "マポレーナ",
			0xb7 => "ヘルクラウダー",
			0xaa => "レッドドラゴン",
			0xda => "ギガンテス",
			0x5d => "アカイライ",
			0xf3 => "マジックアーマー",
			0x13 => "ベホマスライム",
			0xde => "トロルキング",
			0xd5 => "じごくのメンドーサ",
			0xc6 => "にじくじゃく",
			0xc4 => "ナイトキング",
			0x114 => "ギガントドラゴン(0x114)",
			0xaf => "ギガントドラゴン(0xAF)",
			0xa8 => "ヘルバトラー",
			0xe0 => "ひょうがまじん",
			0xa6 => "キマライガー",
			0x26 => "ひとくいばこ",
			0x27 => "ミミック",
			0xb4 => "スライムベホマズン",
			0x4d => "ゴールデントーテム",
			0x35 => "ラストテンツク",
			0x109 => "ダークトロル(0x109)",
			0x116 => "ダークトロル(0x116)",
			0xed => "スターキメラ",
			0x14e => "ギリメカラ",
			0xf1 => "ヘルミラージュ",
			0x147 => "だいおうクジラ",
			0xb5 => "メタルキング(normal)",
			0x127 => "メタルキング(スペクタクルショー)",
			0xe2 => "ゴッドライダー",
			0xd7 => "レジェンドホース",
			0xeb => "ガメゴンレジェンド",
			0x149 => "デスタランチュラ",
			0x141 => "アイアンブルドー",
			0xb8 => "スライムマデュラ",
			0xef => "まおうのかめん",
			0xc2 => "サタンメイル",
			0xfe => "ビュアール",
			0x14a => "ボーンスパイダ",
			0xe6 => "キマイラロード",
			0xb9 => "ゴールデンスライム",
			0xe4 => "ゴールドマジンガ",
			0xe5 => "ファイナルウェポン",
			0xf2 => "プラチナキング(normal)",
			0x128 => "プラチナキング(スペクタクルショー)",
			0x143 => "ヘルヴィーナス",
			0xfa => "メフィストフェレス",
			0xf7 => "ロードコープス",
			0xf6 => "ホラービースト",
			0x28 => "パンドラボックス",
			0x145 => "マッドブリザード",
			0xec => "あんこくまじん",
			0xf4 => "ヴァルハラー",
			0xfc => "じごくぐるま",
			0xd6 => "れんごく天馬",
			0xf9 => "ちていのばんにん",
			0xc7 => "れんごくまちょう",
			0x144 => "エビルフレイム(0x144)",
			0x11c => "エビルフレイム(0x11C)",
			0x11f => "エビルフレイム(0x11F)",
			0x120 => "エビルフレイム(0x120)",
			0x121 => "エビルフレイム(0x121)",
			0x14d => "ヘルガーディアン",
			0xab => "アンドレアル",
			0xee => "デスカイザー",
			0xe7 => "じごくのヌエ(0xE7)",
			0x115 => "じごくのヌエ(0x115)",
			0x14b => "うみうしひめ",
			0xf5 => "クラウンヘッド",
			0xf8 => "イエローサタン",
			0xf0 => "まかいファイター",
			0xfb => "ゴールドタヌ",
			0x10c => "デンガー",
			0xfd => "ダークマリーン",
			0xb0 => "ドラゴン・ウー",
			0x148 => "オーシャンボーン",
			0x108 => "シーバーン",
			0x12c => "ブルドーガ",
			0x12d => "なぞの黒騎士",
			0x12e => "妖女イシュダル",
			0x12f => "病魔パンデルム",
			0x130 => "魔神ジャダーマ",
			0x15b => "ぬしさま",
			0x131 => "ぬしさま",
			0x132 => "石の番人",
			0x133 => "妖毒虫ズオー",
			0x134 => "アノン",
			0x135 => "呪幻師シャルマナ",
			0x2eb => "魔教師エルシオン",
			0x136 => "魔教師エルシオン",
			0x137 => "大怪像ガドンゴ",
			0x158 => "ゴレオン将軍",
			0x139 => "ゴレオン将軍",
			0x159 => "ゲルニック将軍",
			0x13a => "ゲルニック将軍",
			0x13b => "ギュメイ将軍",
			0x15a => "ギュメイ将軍",
			0x13c => "暗黒皇帝ガナサダイ",
			0x13d => "暗黒皇帝ガナサダイ",
			0x2ec => "暗黒皇帝ガナサダイ",
			0x2ed => "暗黒皇帝ガナサダイ",
			0x13e => "闇竜バルボロス",
			0x2ee => "闇竜バルボロス",
			0x13f => "堕天使エルギオス",
			0x140 => "堕天使エルギオス",
			0x2ef => "堕天使エルギオス",
			0x2f0 => "堕天使エルギオス",
			0x2f1 => "堕天使エルギオス",
			0x2f2 => "堕天使エルギオス",
			0x2f3 => "堕天使エルギオス",
			0x321 => "堕天使エルギオス",
			0x153 => "いにしえの魔神",
			0x2fa => "いにしえの魔神",
			0x2fb => "いにしえの魔神",
			0x155 => "ギャングアニマル",
			0x2f8 => "名をうばわれし王",
			0x156 => "名をうばわれし王",
			0x2f9 => "フォロボシータ",
			0x157 => "フォロボシータ",
			0x154 => "アルマトラ",
			0xd8 => "黒竜丸",
			0xea => "ハヌマーン",
			0xe1 => "スライムジェネラル",
			0xe3 => "Ｓキラーマシン",
			0x14c => "イデアラゴン",
			0x142 => "ブラッドナイト",
			0xdb => "アトラス",
			0x14f => "怪力軍曹イボイノス",
			0x150 => "邪眼皇帝アウルート",
			0x151 => "魔剣神レパルド",
			0x2fc => "魔剣神レパルド",
			0x146 => "破壊神フォロボス",
			0x2f4 => "破壊神フォロボス",
			0x2f5 => "破壊神フォロボス",
			0x2f6 => "グレイナル",
			0x2f7 => "グレイナル",
			0x152 => "グレイナル",
			0x138 => "グレイナル",
			0x1f4 => "竜王",
			0x258 => "竜王",
			0x259 => "竜王",
			0x1f5 => "シドー",
			0x25a => "シドー",
			0x25b => "シドー",
			0x25c => "シドー",
			0x25d => "シドー",
			0x1f6 => "バラモス",
			0x25e => "バラモス",
			0x25f => "バラモス",
			0x260 => "バラモスs",
			0x261 => "バラモス",
			0x1f7 => "ゾーマ",
			0x262 => "ゾーマ",
			0x263 => "ゾーマ",
			0x264 => "ゾーマ",
			0x265 => "ゾーマ",
			0x1f8 => "デスピサロ",
			0x266 => "デスピサロ",
			0x267 => "デスピサロ",
			0x268 => "デスピサロ",
			0x269 => "デスピサロ",
			0x26a => "デスピサロ",
			0x26b => "デスピサロ",
			0x26c => "デスピサロ",
			0x1f9 => "エスターク",
			0x26d => "エスターク",
			0x26e => "エスターク",
			0x26f => "エスターク",
			0x270 => "エスターク",
			0x271 => "エスターク",
			0x272 => "エスターク",
			0x1fa => "ミルドラース",
			0x273 => "ミルドラース",
			0x274 => "ミルドラース",
			0x275 => "ミルドラース",
			0x276 => "ミルドラース",
			0x277 => "ミルドラース",
			0x1fb => "ムドー",
			0x278 => "ムドー",
			0x279 => "ムドー",
			0x27a => "ムドー",
			0x27b => "ムドー",
			0x27c => "ムドー",
			0x27d => "ムドー",
			0x1fc => "デスタムーア",
			0x27e => "デスタムーア",
			0x27f => "デスタムーア",
			0x280 => "デスタムーア",
			0x281 => "デスタムーア",
			0x282 => "デスタムーア",
			0x283 => "デスタムーア",
			0x301 => "ダークドレアム",
			0x302 => "ダークドレアム",
			0x303 => "ダークドレアム",
			0x304 => "ダークドレアム",
			0x305 => "ダークドレアム",
			0x306 => "ダークドレアム",
			0x307 => "ダークドレアム",
			0x202 => "ダークドレアム",
			0x1ff => "オルゴ・デミーラ",
			0x284 => "オルゴ・デミーラ",
			0x285 => "オルゴ・デミーラ",
			0x286 => "オルゴ・デミーラ",
			0x287 => "オルゴ・デミーラ",
			0x288 => "オルゴ・デミーラ",
			0x28b => "ドルマゲス",
			0x28c => "ドルマゲス",
			0x28d => "ドルマゲス",
			0x200 => "ドルマゲス",
			0x289 => "ドルマゲス",
			0x28a => "ドルマゲス",
			0x28e => "ラプソーン",
			0x28f => "ラプソーン",
			0x290 => "ラプソーン",
			0x291 => "ラプソーン",
			0x292 => "ラプソーン",
			0x293 => "ラプソーン",
			0x294 => "ラプソーン",
			0x201 => "ラプソーン",
			0x308 => "ひだりて",
			0x309 => "ひだりて",
			0x1fd => "ひだりて",
			0x30a => "みぎて",
			0x30b => "みぎて",
			0x1fe => "みぎて",
			0x320 => "イザヤール",
			0x384 => "サンドバッグくん",
		];

		if(IS_EN){
			return $list_en[$id] ?? dechex($id);
		}else{
			return $list_jp[$id] ?? dechex($id);
		}
	}
}

class index{
	private static $counter = 0;
	private static array $data = [];

	public static function register(int $id, string $tihou, ?string $kannzi, string $option, string $mode, int $group){//, string $eigo, string $eigo1
		self::$data[$id] = [$tihou, $kannzi, $option, $mode, $group, ++self::$counter];
	}

	public static function get() : array{
		return self::$data;
	}

	public static function get1(int $id) : ?array{
		return self::$data[$id] ?? null;
	}
}
const DUNGEON = "ダンジョン";
const ALWAYS = "常時";
const DAY = "日中";
const NIGHT = "夜";
const UNKNOWN = "不明";

$counter = 0;

const ALWAYS1 = "always";
const DAY1 = "day";
const NIGHT1 = "night";
if(true){
	index::register(0xC, "ウォルロ地方", null, "全域", DAY, ++$counter, "Angel Falls", DAY1);
	index::register(0xF, "ウォルロ地方", null, "一部スポーンポイント", ALWAYS, $counter, "Angel Falls", ALWAYS1);
	index::register(0xE, "ウォルロ地方", null, "全域", NIGHT, $counter, "Angel Falls", NIGHT1);
	index::register(0x20, "キサゴナ遺跡", null, "b1f 入口に近い方", DUNGEON, ++$counter, "The Hexagon", "B1(Dracky)");
	index::register(0x21, "キサゴナ遺跡", null, "b2f", DUNGEON, $counter, "The Hexagon", "B2(Bag o' laughs)");
	index::register(0x22, "キサゴナ遺跡", null, "b1f ブルドーガ前", DUNGEON, $counter, "The Hexagon", "B1(Bag o' laughs)");
	index::register(0x0, "西セントシュタイン", null, "上半分", ALWAYS, ++$counter, "Western Stornway", "upper half");
	index::register(0x2, "西セントシュタイン", null, "中央より少し下", ALWAYS, $counter, "Western Stornway", "slightly below center");
	index::register(0x3, "西セントシュタイン", null, "下付近", ALWAYS, $counter, "Western Stornway", "under");
	index::register(0x24, "東セントシュタイン", null, "陸", ALWAYS, ++$counter, "Eastern Stornway", "land");
	index::register(0x25, "東セントシュタイン", null, "砂浜", ALWAYS, $counter, "Eastern Stornway", "sandy beach");
	index::register(0x125, "エラフィタ地方", null, "お城側の橋付近 (昼)", DAY, ++$counter, "Zere", "castle side(day)");
	index::register(0x126, "エラフィタ地方", null, "お城側の橋付近 (夜)", NIGHT, $counter, "Zere", "castle side(night)");
	index::register(0x127, "エラフィタ地方", null, "麦わら畑", NIGHT, $counter, "Zere", "castle side(wheat field)");
	index::register(0x128, "エラフィタ地方", null, "花畑", NIGHT, $counter, "Zere", "unused");
	index::register(0x4, "エラフィタ地方", null, "エラフィタ側", DAY, ++$counter, "Zere", "Zere side(day)");
	index::register(0x6, "エラフィタ地方", null, "エラフィタ側", NIGHT, $counter, "Zere", "Zere side(night)");
	index::register(0x7, "エラフィタ地方", null, "毒付近の茂みと毒の辺り(夜)", "夜&常時", $counter, "Zere", "Forest near poison (always) and poison (night)");
	index::register(0x8, "ほろびのもり", "滅びの森", "", UNKNOWN, ++$counter, "Doomingale Forest", "?");
	index::register(0xa, "ほろびのもり", "滅びの森", "", UNKNOWN, $counter, "Doomingale Forest", "?");
	index::register(0xb, "ほろびのもり", "滅びの森", "", UNKNOWN, $counter, "Doomingale Forest", "?");
	index::register(0x18, "ルディアノ城", null, "地上", DUNGEON, ++$counter);
	index::register(0x19, "ルディアノ城", null, "B1F", DUNGEON, $counter);
	index::register(0x1B, "ルディアノ城", null, "西の塔(階段室)、東の塔", DUNGEON, $counter);
	index::register(0x10, "東ベクセリア地方", null, "", DAY, ++$counter);
	index::register(0x12, "東ベクセリア地方", null, "", NIGHT, $counter);
	index::register(0x13, "東ベクセリア地方", null, "真ん中辺りの地図で色が違う場所", NIGHT, $counter);
	index::register(0x14, "東ベクセリア地方", null, "不明", NIGHT, $counter);
	index::register(0x15, "西ベクセリア地方", null, "", ALWAYS, ++$counter);
	index::register(0x16, "西ベクセリア地方", null, "中央", ALWAYS, $counter);
	index::register(0x17, "西ベクセリア地方", null, "海岸", ALWAYS, $counter);
	index::register(0x1e, "ふういんのほこら", "封印のほこら", "", DUNGEON, ++$counter);
	index::register(0x28, "アユルダーマとう", "アユルダーマ島", "", DAY, ++$counter);
	index::register(0x29, "アユルダーマとう", "アユルダーマ島", "", NIGHT, $counter);
	index::register(0x2a, "アユルダーマとう", "アユルダーマ島", "", ALWAYS, $counter);
	index::register(0x2b, "アユルダーマとう", "アユルダーマ島", "不明", UNKNOWN, $counter);
	index::register(0x30, "ダーマの塔", null, "1F", DUNGEON, ++$counter);
	index::register(0x31, "ダーマの塔", null, "2F", DUNGEON, ++$counter);
	index::register(0x32, "ダーマの塔", null, "3F", DUNGEON, ++$counter);
	index::register(0x33, "ダーマの塔", null, "4F", DUNGEON, ++$counter);
	index::register(0x34, "ダーマの塔", null, "5F", DUNGEON, ++$counter);
	index::register(0x35, "ダーマの塔", null, "6F", DUNGEON, ++$counter);
	index::register(0x2d, "アユルダーマとう(ツォのはま)", "アユルダーマ島(ツォの浜)", "ツォの浜を超えた方", ALWAYS, ++$counter);
	index::register(0x2e, "アユルダーマとう(ツォのはま)", "アユルダーマ島(ツォの浜)", "不明", UNKNOWN, $counter);
	index::register(0x2f, "アユルダーマとう(ツォのはま)", "アユルダーマ島(ツォの浜)", "砂浜", ALWAYS, $counter);
	index::register(0x36, "海べのどうくつ", "海辺の洞窟", "地上", DUNGEON, ++$counter);
	index::register(0x37, "海べのどうくつ", "海辺の洞窟", "1F", DUNGEON, ++$counter);
	index::register(0x38, "海べのどうくつ", "海辺の洞窟", "1F(行き止まり)", DUNGEON, ++$counter);
	index::register(0x39, "海べのどうくつ", "海辺の洞窟", "2F", DUNGEON, ++$counter);
	index::register(0x3a, "海べのどうくつ", "海辺の洞窟", "秘密の岩場に繋がってるマップ", DUNGEON, ++$counter);
	index::register(0x3b, "ベレンのきしべ", "ベレンの岸辺", "スポーンポイントによって異なる", ALWAYS, ++$counter);
	index::register(0x3c, "ベレンのきしべ", "ベレンの岸辺", "不明", UNKNOWN, $counter);
	index::register(0x3d, "ベレンのきしべ", "ベレンの岸辺", "スポーンポイントによって異なる", ALWAYS, $counter);
	index::register(0x3e, "ベレンのきしべ", "ベレンの岸辺", "砂浜", ALWAYS, $counter);
	index::register(0x3f, "カラコタ地方", null, "", DAY, ++$counter);
	index::register(0x40, "カラコタ地方", null, "", NIGHT, $counter);
	index::register(0x41, "カラコタ地方", null, "", UNKNOWN, $counter);
	index::register(0x42, "ピタリへいげん", "ビタリ平原", "", DAY, ++$counter);
	index::register(0x43, "ピタリへいげん", "ビタリ平原", "", NIGHT, $counter);
	index::register(0x44, "ピタリへいげん", "ビタリ平原", "ピタリ山付近", ALWAYS, $counter);
	index::register(0x4a, "ピタリ山", null, "1F", DUNGEON, ++$counter);
	index::register(0x4b, "ピタリ山", null, "2F", DUNGEON, ++$counter);
	index::register(0x4c, "ピタリ山", null, "3F", DUNGEON, ++$counter);
	index::register(0x4d, "ピタリ山", null, "4F", DUNGEON, ++$counter);
	index::register(0x129, "ピタリ山", null, "5F(RTAでは通らない)", DUNGEON, ++$counter);
	index::register(0x4e, "ピタリ山", null, "6F", DUNGEON, ++$counter);
	index::register(0x50, "ピタリ山", null, "7F", DUNGEON, ++$counter);
	index::register(0x51, "サンマロウ地方 (サンマロウ側)", null, "", DAY, ++$counter);
	index::register(0x52, "サンマロウ地方 (サンマロウ側)", null, "", NIGHT, $counter);
	index::register(0x53, "サンマロウ地方 (サンマロウ側)", null, "洞窟付近", NIGHT, $counter);
	index::register(0x54, "サンマロウ地方 (サンマロウ側)", null, "不明", UNKNOWN, $counter);
	index::register(0x55, "サンマロウ北のどうくつ", "サンマロウ北の洞窟", "入口に繋がっているマップ", DUNGEON, ++$counter);
	index::register(0x57, "サンマロウ北のどうくつ", "サンマロウ北の洞窟", "1Fと1Fの中継地点", DUNGEON, ++$counter);
	index::register(0x58, "サンマロウ北のどうくつ", "サンマロウ北の洞窟", "B1F", DUNGEON, ++$counter);
	index::register(0x59, "サンマロウ北のどうくつ", "サンマロウ北の洞窟", "B2F", DUNGEON, ++$counter);
	index::register(0x5a, "グビアナ砂漠", null, "", DAY, ++$counter);
	index::register(0x5b, "グビアナ砂漠", null, "", NIGHT, $counter);
	index::register(0x5c, "グビアナ砂漠", null, "窪地", ALWAYS, $counter);
	index::register(0x62, "ヤハーンしっち", "ヤハーン湿地", "", NIGHT, ++$counter);
	index::register(0x63, "ヤハーンしっち", "ヤハーン湿地", "", DAY, $counter);
	index::register(0x64, "ヤハーンしっち", "ヤハーン湿地", "", UNKNOWN, $counter);
	index::register(0x65, "カルバド大そうげん", "カルバド大草原", "", DAY, ++$counter);
	index::register(0x66, "カルバド大そうげん", "カルバド大草原", "", NIGHT, $counter);
	index::register(0x67, "ダダマルダ山", null, "全域", NIGHT, ++$counter);
	index::register(0x68, "カズチィチィ山", null, "", ALWAYS, ++$counter);
	index::register(0x139, "カズチィチィ山", null, "主にばくだん岩がスポーンする地点", ALWAYS, $counter);
	index::register(0x6a, "カズチャ村", null, "", DUNGEON, ++$counter);
	index::register(0x6b, "カズチャ村", null, "(建物内1)", DUNGEON, ++$counter);
	index::register(0x6c, "カズチャ村", null, "(建物内2)", DUNGEON, ++$counter);
	index::register(0x6d, "カズチャ村", null, "(建物内3)", DUNGEON, ++$counter);
	index::register(0x6e, "カズチャ村", null, "(井戸)", DUNGEON, ++$counter);
	index::register(0x6f, "カズチャ村", null, "B1F", DUNGEON, ++$counter);
	index::register(0x74, "あめのしま", "雨の島", "", DAY, ++$counter);
	index::register(0x75, "あめのしま", "雨の島", "", DAY, $counter);
	index::register(0x70, "アシュバル地方", null, "", DAY, ++$counter);
	index::register(0x71, "アシュバル地方", null, "", NIGHT, $counter);
	index::register(0x72, "アシュバル地方", null, "", ALWAYS, $counter);
	index::register(0x73, "アシュバル地方", null, "", UNKNOWN, $counter);
	index::register(0x78, "エルマニオンかいがん", "エルマニオン海岸", "全域", ALWAYS, ++$counter);
	index::register(0x76, "エルマニオンせつげん", "エルマニオン雪原", "", DAY, ++$counter);
	index::register(0x77, "エルマニオンせつげん", "エルマニオン雪原", "", NIGHT, $counter);
	index::register(0x5e, "グビアナ地下すいどう", "グビアナ地下水道", "B1F 入口に近い方", DUNGEON, ++$counter);
	index::register(0x5f, "グビアナ地下すいどう", "グビアナ地下水道", "B1F 入口に繋がってない方", DUNGEON, ++$counter);
	index::register(0x60, "グビアナ地下すいどう", "グビアナ地下水道", "B2F", DUNGEON, ++$counter);
	index::register(0x7e, "エルシオン地下こうしゃ", "エルシオン地下校舎", "B1F", DUNGEON, ++$counter);
	index::register(0x7f, "エルシオン地下こうしゃ", "エルシオン地下校舎", "B2F", DUNGEON, ++$counter);
	index::register(0x7f, "エルシオン地下こうしゃ", "エルシオン地下校舎", "B2F", DUNGEON, ++$counter);
	index::register(0x8a, "東ナザム地方", null, "", DAY, ++$counter);
	index::register(0x8b, "東ナザム地方", null, "", NIGHT, $counter);
	index::register(0x8c, "東ナザム地方", null, "", ALWAYS, $counter);
	index::register(0x8d, "西ナザム地方", null, "", DAY, $counter);
	index::register(0x8e, "西ナザム地方", null, "", NIGHT, $counter);
	index::register(0x8f, "西ナザム地方", null, "", ALWAYS, $counter);
	index::register(0x90, "魔獣のどうくつ", "魔獣の洞窟", "地上", DUNGEON, ++$counter);
	index::register(0x91, "魔獣のどうくつ", "魔獣の洞窟", "B1F", DUNGEON, ++$counter);
	index::register(0x92, "魔獣のどうくつ", "魔獣の洞窟", "B2F", DUNGEON, ++$counter);
	index::register(0x93, "魔獣のどうくつ", "魔獣の洞窟", "B3F", DUNGEON, ++$counter);
	index::register(0x94, "竜のもん", "竜の門", "", DAY, ++$counter);
	index::register(0x95, "竜のもん", "竜の門", "", NIGHT, $counter);
	index::register(0x13a, "竜のもん", "竜の門", "", ALWAYS, $counter);
	index::register(0x96, "竜のしっぽ地方", null, "", DAY, ++$counter);
	index::register(0x97, "竜のしっぽ地方", null, "", NIGHT, $counter);
	index::register(0x98, "竜のしっぽ地方", null, "", UNKNOWN, $counter);
	index::register(0x9c, "竜のつばさ地方", null, "", DAY, ++$counter);
	index::register(0x9d, "竜のつばさ地方", null, "", NIGHT, $counter);
	index::register(0x9e, "竜のつばさ地方", null, "海岸", NIGHT, $counter);
	index::register(0x9f, "竜のつばさ地方", null, "", NIGHT, $counter);
	index::register(0x99, "竜のしっぽ地方 2", null, "", DAY, $counter);
	index::register(0x9a, "竜のしっぽ地方 2", null, "", NIGHT, $counter);
	index::register(0x9b, "竜のしっぽ地方 2", null, "", NIGHT, $counter);
	index::register(0xa0, "竜のあきと地方", null, "", DAY, ++$counter);
	index::register(0xa1, "竜のあきと地方", null, "", NIGHT, $counter);
	index::register(0xa2, "ドミール火山", null, "1F", NIGHT, ++$counter);
	index::register(0xa3, "ドミール火山", null, "2F", NIGHT, ++$counter);
	index::register(0xa4, "ドミール火山", null, "3F 1", NIGHT, ++$counter);
	index::register(0xa5, "ドミール火山", null, "3F (屋外)", NIGHT, ++$counter);
	index::register(0xa6, "ドミール火山", null, "3F 3", NIGHT, ++$counter);
	index::register(0xa7, "ドミール火山", null, "4F", NIGHT, ++$counter);
	index::register(0xa8, "ドミール火山", null, "5F", NIGHT, ++$counter);
	index::register(0xa9, "ドミール火山", null, "6F", NIGHT, ++$counter);
	index::register(0xae, "ガナンていこくりょう", "ガナン帝国領", "", DAY, ++$counter);
	index::register(0xaf, "ガナンていこくりょう", "ガナン帝国領", "", NIGHT, $counter);
	index::register(0xb0, "ガナンていこく城", "ガナン帝国城", "屋外", DUNGEON, ++$counter);
	index::register(0xb1, "ガナンていこく城", "ガナン帝国城", "1F南", DUNGEON, ++$counter);
	index::register(0xb2, "ガナンていこく城", "ガナン帝国城", "1F東", DUNGEON, ++$counter);
	index::register(0xb3, "ガナンていこく城", "ガナン帝国城", "1F西(RTAでは通らない方)", DUNGEON, ++$counter);
	index::register(0xb4, "ガナンていこく城", "ガナン帝国城", "1F北(RTAでは訪れない場所)", DUNGEON, ++$counter);
	index::register(0xb5, "ガナンていこく城", "ガナン帝国城", "2F北(RTAでは訪れない場所)", DUNGEON, ++$counter);
	index::register(0xb6, "ガナンていこく城", "ガナン帝国城", "1F", DUNGEON, ++$counter);
	index::register(0xb7, "ガナンていこく城", "ガナン帝国城", "2F", DUNGEON, ++$counter);
	index::register(0xb8, "ガナンていこく城", "ガナン帝国城", "3F", DUNGEON, ++$counter);
	index::register(0xb9, "とざされたろうごく", "閉ざされた牢獄", "B1F", DUNGEON, ++$counter);
	index::register(0xba, "とざされたろうごく", "閉ざされた牢獄", "B2F", DUNGEON, ++$counter);
	index::register(0xbb, "とざされたろうごく", "閉ざされた牢獄", "B3F", DUNGEON, ++$counter);
	index::register(0xbc, "とざされたろうごく", "閉ざされた牢獄", "B4F", DUNGEON, ++$counter);
	index::register(0xbd, "とざされたろうごく", "閉ざされた牢獄", "B5F", DUNGEON, ++$counter);
	index::register(0xbe, "とざされたろうごく", "閉ざされた牢獄", "B6F", DUNGEON, ++$counter);
	index::register(0xbf, "絶望と憎悪の魔宮", null, "天の箱舟 1", DUNGEON, ++$counter);
	index::register(0xc3, "絶望と憎悪の魔宮", null, "B2F 2", DUNGEON, ++$counter);
	index::register(0xc5, "絶望と憎悪の魔宮", null, "B2F 3", DUNGEON, ++$counter);
	index::register(0xc4, "絶望と憎悪の魔宮", null, "B2F 4", DUNGEON, ++$counter);
	index::register(0xc6, "絶望と憎悪の魔宮", null, "1F 5", DUNGEON, ++$counter);
	index::register(0xc7, "絶望と憎悪の魔宮", null, "2F 6", DUNGEON, ++$counter);
	index::register(0xc8, "絶望と憎悪の魔宮", null, "3F 7 ゴレオン将軍", DUNGEON, ++$counter);
	index::register(0xca, "絶望と憎悪の魔宮", null, "5F 8", DUNGEON, ++$counter);
	index::register(0xcc, "絶望と憎悪の魔宮", null, "6F 9", DUNGEON, ++$counter);
	index::register(0xcf, "絶望と憎悪の魔宮", null, "8F 10", DUNGEON, ++$counter);
	index::register(0xd0, "絶望と憎悪の魔宮", null, "9F 11", DUNGEON, ++$counter);
	index::register(0xd1, "絶望と憎悪の魔宮", null, "9F 12", DUNGEON, ++$counter);
	index::register(0xd3, "絶望と憎悪の魔宮", null, "10F 13 ギュメイ将軍前", DUNGEON, ++$counter);
	index::register(0x119, "西ベクセリア地方 (天の箱舟)", null, "天の箱舟", ALWAYS, ++$counter);
	index::register(0x84, "アルマの塔", null, "1F", DUNGEON, ++$counter);
	index::register(0x85, "アルマの塔", null, "2F", DUNGEON, ++$counter);
	index::register(0x86, "アルマの塔", null, "3F", DUNGEON, ++$counter);
	index::register(0x87, "アルマの塔", null, "4F", DUNGEON, ++$counter);
	index::register(0x88, "アルマの塔", null, "5F", DUNGEON, ++$counter);
	index::register(0x12D, "アルマの塔", null, "5F 外廊下", DUNGEON, ++$counter);
	index::register(0x89, "アルマの塔", null, "6F", DUNGEON, ++$counter);
	index::register(0xCB, "絶望と憎悪の魔宮", null, "1F (ショートカット)", DUNGEON, ++$counter);
	index::register(0x118, "ウォルロ地方 (天の箱舟)", null, "高台", ALWAYS, ++$counter);
	index::register(0xde, "まさゆきの地図", null, "b1f b2f b3f b4f", DUNGEON, ++$counter);
	index::register(0xdf, "まさゆきの地図", null, "b5f b6f b7f b8f", DUNGEON, ++$counter);
	index::register(0xe0, "まさゆきの地図", null, "b9f b10f b11f b12f", DUNGEON, ++$counter);
	index::register(0xe1, "まさゆきの地図", null, "b13f b14f b15f", DUNGEON, ++$counter);
	index::register(0xe4, "クエスト「お願い天使様」の地図", null, "b1f b2f b3f", DUNGEON, ++$counter);
	index::register(0xc0, "絶望と憎悪の魔宮", null, "6F 外", DUNGEON, ++$counter);
	index::register(0xc1, "絶望と憎悪の魔宮", null, "8F 外", DUNGEON, ++$counter);
	index::register(0xc9, "絶望と憎悪の魔宮", null, "4F", DUNGEON, ++$counter);
	index::register(0xd2, "絶望と憎悪の魔宮", null, "8F", DUNGEON, ++$counter);
	index::register(0x80, "ジャーホジ地方", null, "日中", DAY, $counter);
	index::register(0x81, "ジャーホジ地方", null, "夜", DAY, $counter);
	index::register(0x82, "オンゴリのガケ", null, "夜", DAY, ++$counter);
	index::register(0x83, "オンゴリのガケ", null, "日中", DAY, ++$counter);
	index::register(0x61, "ルビアナ地下すいどう", null, "B2F", DAY, ++$counter);
	index::register(0x11B, "アユルダーマとう", null, " (天の箱舟)", ALWAYS, ++$counter);
	index::register(0x12F, "西ベクセリア地方 (小島)", null, "(昼)", DAY, ++$counter);
	index::register(0x130, "西ベクセリア地方 (小島)", null, "(夜)", NIGHT, $counter);
	index::register(0x11A, "東セントシュタイン", null, "(天の箱舟) (全域)", NIGHT, ++$counter);
	index::register(0x137, "サンマロウ地方 (小島)", null, "(全域)", ALWAYS, ++$counter);
	index::register(0x11C, "ピタリ海岸 (高台)", null, "(全域+常時)", ALWAYS, ++$counter);
	index::register(0x45, "ピタリ海岸 (平地)", null, "(昼)", DAY, ++$counter);
	index::register(0x46, "ピタリ海岸 (平地)", null, "(夜)", DAY, $counter);
	index::register(0x47, "ピタリ海岸 (森)", null, "(常時)", ALWAYS, ++$counter);
	index::register(0x48, "ピタリ海岸 (海岸)", null, "(常時)", ALWAYS, $counter);
	index::register(0x133, "あめのしま (小島)", null, "(昼)", ALWAYS, ++$counter);
	index::register(0x134, "あめのしま (小島)", null, "(夜)", ALWAYS, $counter);
	index::register(0x12A, "グビアナ砂漠 北西の小島", null, "(昼)", DAY, ++$counter);
	index::register(0x12B, "グビアナ砂漠 北西の小島", null, "(夜)", DAY, $counter);
	index::register(0x12C, "グビアナ砂漠 北東の小島", null, "(全域)", ALWAYS, $counter);
	index::register(0x11D, "グビアナ砂漠(高台)", null, "(全域)", ALWAYS, ++$counter);
	index::register(0x11E, "アシュバル地方(高台)", null, "(昼)", DAY, ++$counter);
	index::register(0x138, "アシュバル地方(高台)", null, "(夜)", DAY, $counter);
	index::register(0x69, "カズチィチィ山 南部", null, "(全域)", ALWAYS, ++$counter);
	index::register(0x121, "オンゴリのガケ(高台)", null, "(全域)", ALWAYS, ++$counter);
	index::register(0x120, "ヤハーン湿地 (高台)", null, "(全域)", ALWAYS, ++$counter);
	index::register(0x11F, "アイスバリー海岸 (小島)", null, "(全域)", ALWAYS, ++$counter);
	index::register(0x7A, "アイスバリー海岸 (平地・森)", null, "(昼)", ALWAYS, ++$counter);
	index::register(0x7B, "アイスバリー海岸 (平地・森)", null, "(夜)", ALWAYS, $counter);
	index::register(0x7C, "アイスバリー海岸 (海岸)", null, "(昼)", ALWAYS, $counter);
	index::register(0x7D, "アイスバリー海岸 (海岸)", null, "(夜)", ALWAYS, $counter);
	index::register(0x135, "南ナザム地方 (小島)", null, "(昼)", DAY, $counter);
	index::register(0x136, "南ナザム地方 (小島)", null, "(夜)", NIGHT, $counter);
	index::register(0x123, "南ナザム地方 (高台)", null, "(全域)", ALWAYS, ++$counter);
	index::register(0x124, "竜のしっぽ地方 (高台)", null, "(全域)", ALWAYS, ++$counter);
	index::register(0xAB, "竜のくび地方(平地・草原・森)", null, "(昼)", DAY, ++$counter);
	index::register(0xAC, "竜のくび地方(平地・草原・森)", null, "(夜)", NIGHT, $counter);
	index::register(0xAD, "竜のくび地方(海岸)", null, "", ALWAYS, $counter);

	index::register(0xe5, "遺跡J (2)", null, "", DUNGEON, ++$counter);
	index::register(0xe6, "遺跡I (3)", null, "", DUNGEON, ++$counter);
	index::register(0xe7, "遺跡H (4)", null, "", DUNGEON, ++$counter);
	index::register(0xe8, "遺跡G (5)", null, "", DUNGEON, ++$counter);
	index::register(0xe9, "遺跡F (6)", null, "", DUNGEON, ++$counter);
	index::register(0xea, "遺跡E (7)", null, "", DUNGEON, ++$counter);
	index::register(0xeb, "遺跡D (8)", null, "", DUNGEON, ++$counter);
	index::register(0xec, "遺跡C (9)", null, "", DUNGEON, ++$counter);
	index::register(0xed, "遺跡B (10)", null, "", DUNGEON, ++$counter);
	index::register(0xee, "遺跡A (11)", null, "", DUNGEON, ++$counter);
	index::register(0xef, "遺跡S (12)", null, "", DUNGEON, ++$counter);

	index::register(0xd8, "自然K (1)", null, "", DUNGEON, ++$counter);
	index::register(0xd9, "自然J (2)", null, "", DUNGEON, ++$counter);
	index::register(0xda, "自然I (3)", null, "", DUNGEON, ++$counter);
	index::register(0xdb, "自然H (4)", null, "", DUNGEON, ++$counter);
	index::register(0xdc, "自然G (5)", null, "", DUNGEON, ++$counter);
	index::register(0xdd, "自然F (6)", null, "", DUNGEON, ++$counter);
	index::register(0xde, "自然E (7)", null, "", DUNGEON, ++$counter);
	index::register(0xdf, "自然D (8)", null, "", DUNGEON, ++$counter);
	index::register(0xe0, "自然C (9)", null, "", DUNGEON, ++$counter);
	index::register(0xe1, "自然B (10)", null, "", DUNGEON, ++$counter);
	index::register(0xe2, "自然A (11)", null, "", DUNGEON, ++$counter);
	index::register(0xe3, "自然S (12)", null, "", DUNGEON, ++$counter);


	index::register(0xf0, "氷K (1)", null, "", DUNGEON, ++$counter);
	index::register(0xf1, "氷J (2)", null, "", DUNGEON, ++$counter);
	index::register(0xf2, "氷I (3)", null, "", DUNGEON, ++$counter);
	index::register(0xf3, "氷H (4)", null, "", DUNGEON, ++$counter);
	index::register(0xf4, "氷G (5)", null, "", DUNGEON, ++$counter);
	index::register(0xf5, "氷F (6)", null, "", DUNGEON, ++$counter);
	index::register(0xf6, "氷E (7)", null, "", DUNGEON, ++$counter);
	index::register(0xf7, "氷D (8)", null, "", DUNGEON, ++$counter);
	index::register(0xf8, "氷C (9)", null, "", DUNGEON, ++$counter);
	index::register(0xf9, "氷B (10)", null, "", DUNGEON, ++$counter);
	index::register(0xfa, "氷A (11)", null, "", DUNGEON, ++$counter);
	index::register(0xfb, "氷S (12)", null, "", DUNGEON, ++$counter);


	index::register(0x108, "水K (1)", null, "", DUNGEON, ++$counter);
	index::register(0x109, "水J (2)", null, "", DUNGEON, ++$counter);
	index::register(0x10a, "水I (3)", null, "", DUNGEON, ++$counter);
	index::register(0x10b, "水H (4)", null, "", DUNGEON, ++$counter);
	index::register(0x10c, "水G (5)", null, "", DUNGEON, ++$counter);
	index::register(0x10d, "水F (6)", null, "", DUNGEON, ++$counter);
	index::register(0x10e, "水E (7)", null, "", DUNGEON, ++$counter);
	index::register(0x10f, "水D (8)", null, "", DUNGEON, ++$counter);
	index::register(0x110, "水C (9)", null, "", DUNGEON, ++$counter);
	index::register(0x111, "水B (10)", null, "", DUNGEON, ++$counter);
	index::register(0x112, "水A (11)", null, "", DUNGEON, ++$counter);
	index::register(0x113, "水S (12)", null, "", DUNGEON, ++$counter);

	index::register(0xfc, "火山K (1)", null, "", DUNGEON, ++$counter);
	index::register(0xfd, "火山J (2)", null, "", DUNGEON, ++$counter);
	index::register(0xfe, "火山I (3)", null, "", DUNGEON, ++$counter);
	index::register(0xff, "火山H (4)", null, "", DUNGEON, ++$counter);
	index::register(0x100, "火山G (5)", null, "", DUNGEON, ++$counter);
	index::register(0x101, "火山F (6)", null, "", DUNGEON, ++$counter);
	index::register(0x102, "火山E (7)", null, "", DUNGEON, ++$counter);
	index::register(0x103, "火山D (8)", null, "", DUNGEON, ++$counter);
	index::register(0x104, "火山C (9)", null, "", DUNGEON, ++$counter);
	index::register(0x105, "火山B (10)", null, "", DUNGEON, ++$counter);
	index::register(0x106, "火山A (11)", null, "", DUNGEON, ++$counter);
	index::register(0x107, "火山S (12)", null, "", DUNGEON, ++$counter);

	index::register(0x1d, "ルディアノ城 東の塔", null, "", DUNGEON, ++$counter);
	index::register(0x1a, "ルディアノ城 北西の塔", null, "", DUNGEON, ++$counter);
}

// ファイルを配列として読み込みます
$lines = file(__DIR__.DIRECTORY_SEPARATOR."enc.txt");

$enc_id = null;
$tableId = null;
$enc = [];
$table0 = []; // エンカウント情報
$table34 = []; // お供

// 配列の各要素に対して処理を行います
foreach($lines as $line){
	$ex = explode(": ", trim($line));
	if(!isset($ex[1])){
		continue;
	}
	switch($ex[0]){
		case "enc_id":
			$enc_id = hexdec($ex[1]);
			break;
		case "enc":
			$enc[$enc_id][] = hexdec($ex[1]);
			break;
		case "id":
			$tableId = hexdec($ex[1]);
			break;
		case "34":
			$table0[$tableId][] = hexdec($ex[1]);
			break;
		case "0":
			$table34[$tableId][] = hexdec($ex[1]);
			break;

	}
}

function show($result1, string $g = "1"){
	// Markdown表のヘッダーを作成
	//Monster | Percentage/Chance | Detailed value | 1 or 2 G min value | 1 or 2 G max value | RNG range?
	if(IS_EN){
		$header = "| Monster | Percentage/Chance | Detailed value | ".$g."G min value | ".$g."G max value | RNG range | \n| --- | --- | --- | --- | --- | --- |";
	}else{
		$header = "| モンスター | 確率 | 内部的な値 | ".$g."Gの最小数 | ".$g."Gの最大数 | 乱数幅 | \n| --- | --- | --- | --- | --- | --- |";
	}

	//

	echo "\n\n";
// Markdown表のデータを生成
	$rows = "";
	foreach($result1 as $row){
		$rows .= "| ".$row[0]." | ".$row[1]." | ".$row[2]." | ".$row[3]." | ".$row[4]." | ".$row[5]." |\n";
	}


// Markdown表を出力
	echo $header."\n".$rows;
	echo "\n";
}

function show1($result1){
	// Markdown表のヘッダーを作成
	if(IS_EN){
		$header = "| Monster | Probability of the first 3G (or more) | Probability of the second 3G ( below) | \n| --- | --- | --- |";
	}else{
		$header = "| モンスター | 3Gの確率1(以上) | 3Gの確率2(かつ以下) | \n| --- | --- | --- |";
	}
// Markdown表のデータを生成
	$rows = "";
	foreach($result1 as $row){
		$rows .= "| ".$row[0]." | ".$row[1]." | ".$row[2]." |\n";
	}


// Markdown表を出力
	echo $header."\n".$rows."\n";
}


function calculateExpectedValue($probability, $maxValue){
	return (1 - $probability) * $maxValue;
}

$have = json_decode(file_get_contents(__DIR__."/../abc_enc.json"), true);

$haveMax = json_decode(file_get_contents(__DIR__."/../max.json"), true);
$result = [];
$result_3g = [];
$result_test = [];
foreach($table34 as $tableId => $item){
//	if(isset($have[$tableId])){
//		continue;
//	}
//	if($tableId >= 0x114&&$tableId <= 0x117){
//		continue;
//	}
	foreach($item as $lr){

		$id = $lr & 0xfff;
		//echo1($id);
		$r1_1 = $lr << 0x11 & 0xFFFFFFFF;
		$r2 = $lr << 0xe & 0xFFFFFFFF;
		$r1_1 = $r1_1 >> 0x1d & 0xFFFFFFFF;
		$max = $r1_1 - ($lr >> 0x1d); //ここでマイナスになった場合反転処理必須


//			$r1 = $r1 << 0x11 & 0xFFFFFFFF;
//			$r0 = $lr + ($r1 >> 0x1d);
//			var_dump($r0);

		//お供の確率
		$r1_1 = $lr << 0x8 & 0xFFFFFFFF;
		$r2 = $lr << 0xb & 0xFFFFFFFF;
		$r1_1 = $r1_1 >> 0x1d;
		$r3 = $lr << 0x5 & 0xFFFFFFFF;
		$r1_1 = $r1_1 + ($r2 >> 0x1d);
		$r1_1 = $r1_1 + ($r3 >> 0x1d);

		//下限値
		$r2 = $lr << 0xb & 0xFFFFFFFF;
		$rand = $r2 >> 0x1d;

		$r1 = $lr << 0x8 & 0xFFFFFFFF;
		$r1 = $r1 >> 0x1d;                 //例のintに保存されている
		$g31 = $r1 + ($r2 >> 0x1d);

		$r1 = $lr << 0x5 & 0xFFFFFFFF;
		$r1 = $g31 + ($r1 >> 0x1d);

		$tmp11 = $lr << 0x11 & 0xFFFFFFFF;
		$tmp22 = $lr << 0xe & 0xFFFFFFFF;
		$test3 = $tmp11 >> 0x1d & 0xFFFFFFFF;
		$test2 = $tmp22 >> 0x1d;
		//var_dump($test3."/".$test2);

		$maxrand = $r1_1;
		$g3_1 = $g31;
		$g3_2 = $r1;
		$bool = false;
		for($k = 1; $k <= $maxrand; $k++){
			if($g3_1 < $k&&$k <= $g3_2){
				$bool = true;
			}
		}

		$probability = $rand / $r1_1;
		$maxValue = 100;
		$expectedValue = calculateExpectedValue($probability, $maxValue);
		$expectedValueMinus100 = 100 - $expectedValue;

		if($bool){
			$result_3g[] = [s::get($id), number_format(100 - calculateExpectedValue($g3_1 / $maxrand, $maxValue), 4), number_format(100 - calculateExpectedValue($g3_2 / $maxrand, $maxValue), 4)];
		}

		//var_dump($list[$id], $rand." ".$r1_1, $expectedValueMinus100);
		$result_test[] = [s::get($id) ?? dechex($id), number_format($expectedValueMinus100, 4), $rand."/".$r1_1."/".$g31."/".$r1, $test3, $test2, $test2 - $test3];

		//var_dump(s::get($id), $rand." ".$r1_1, $expectedValueMinus100);
		//$result[$tableId][] = [$id, s::get($id), number_format($expectedValueMinus100, 4), $rand."/".$r1_1."/".$g31."/".$r1, $test3, $test2, $test2-$test3];
		$data = index::get1($tableId);
		$result[$tableId]["position"] = $data === null ? null : ($data[0]." ".$data[2]." ".$data[3]);
		$result[$tableId]["main"][] = [
			"groupId" => $tableId."/".$rand."/".$r1_1."/".$g31."/".$r1."/".$test3."/".$test2,
			"tableid" => "0x".dechex($tableId),
			"monsterId" => $id,
			"displayname" => s::get($id),
			"percent2" => number_format($expectedValueMinus100, 4),
			"percent3" => (isset($result_3g[2]) ? number_format(100 - calculateExpectedValue($g3_1 / $maxrand, $maxValue), 4) : null),
			"data" => [
				"2g" => $rand,
				"max" => $r1_1,
				"3g" => $g31,
				"3gmax" => $r1
			],
			"min" => $test3,
			"max" => $test2,
			"countrand" => $test2 - $test3,
			"has2g" => !(number_format($expectedValueMinus100, 4) === "100.0000"),
			"has3g" => $bool,

			"name" => $data === null ? null : ($data[0]." ".$data[2]." ".$data[3]),
		];

//		$monsterid = $data & 0xfff;
//		$g2diff = ($data << 0x8 & 0xFFFFFFFF) >> 0x1d;
//		$g1diff = ($data << 0xb & 0xFFFFFFFF) >> 0x1d;
//		$g2 = $g1diff + $g2diff;
//		$g3diff = ($data << 0x5 & 0xFFFFFFFF) >> 0x1d;
//		$min = ($data << 0x11 & 0xFFFFFFFF) >> 0x1d;
//		$max = ($data << 0xe & 0xFFFFFFFF) >> 0x1d;

		//var_dump([s::get($monsterid),$g2diff, $g1diff, $g3diff, $min, $max, $g2]);
	}
	ob_start();
	show($result_test);
	if(count($result_3g) !== 0){
		//var_dump(dechex($tableId));
		show1($result_3g);
	}
	$result[$tableId]["toString"] = ob_get_clean();
	$result_3g = [];
	$result_test = [];
}


//$result_enc1 = [];
//foreach($enc as $key => $array){
//	if($key >= 0x114&&$key <= 0x117){
//		continue;
//	}
//	$result_enc = [];
//	$maxRand = null;
//	foreach($array as $data){
//		$monsterid = $data & 0xfff;
//		$tmp = $data << 0x11;
//		$rand = ($tmp >> 0x1d & 0xFFFFFFFF);
//		$result_enc[] = [$monsterid, $rand];
//		$maxRand += $rand;
//	}
//	$k = 0;
//	$step = 100.0 / $maxRand;
//	$result2 = "| monster | probability | % | Internal Value |\n|--------|--------|--------|--------|\n";
//	$collect = [];
//	foreach($result_enc as [$monsterid, $item]){
//		$start = $k * $step;
//		$before = $k;
//		$k += $item;
//		$end = $k * $step;
//		//var_dump($item,$maxRand, number_format($start, 4)."%-".number_format($end, 4)."%", $before."-".($k-1));
//		$result2 .= "|".s::get($monsterid)."|".number_format($start, 4)."%-".number_format($end, 4)."%|".(number_format($end - $start, 4))."%|".$before."-".($k - 1)."|\n";
//
//		$trapmonster = false;
//		if($monsterid === 0x27||$monsterid === 0x26||$monsterid === 0x28){
//			$trapmonster = true;
//		}
//		$collect[] = [
//			"monsterId" => $monsterid,
//			"monsterName" => s::get($monsterid),
//			"startPercent" => number_format($start, 4),
//			"endPercent" => number_format($end, 4),
//			"percent" => number_format($end - $start, 4),
//			"start" => $before,
//			"end" => ($k - 1),
//			"maxRand" => $maxRand,
//			"trapMonster" => $trapmonster,
//		];
//	}
//	$result_enc1[$key] = [
//		"id" => "0x".dechex($key),
//		"maxRand" => $maxRand,
//		"step" => $step,
//		"toString" => $result2,
//		"data" => $collect,
//	];
//	//var_dump(dechex($key), $result2);
//
//}
ksort($result);
var_dump($result);
//exit();
file_put_contents("2Gappear.json", json_encode([
	"version" => "2.0.3",
	"explanation" => "This is a list of probabilities that the monster 2G or 3G will appear",
	"main" => $result,
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));

