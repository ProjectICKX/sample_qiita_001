<?php

/**
 * 都道府県の情報を扱います。
 */
class Prefecture {
	//==============================================
	// コード値
	//==============================================
	/**
	 * @var	string	都道府県コード：北海道 (1)
	 */
	const PREF_CD_HOKKAIDO	= '1';

	/**
	 * @var	string	都道府県コード：青森県 (2)
	 */
	const PREF_CD_AOMORI	= '2';

	/**
	 * @var	string	都道府県コード：岩手県 (3)
	 */
	const PREF_CD_IWATE		= '3';

	/**
	 * @var	string	都道府県コード：宮城県 (4)
	 */
	const PREF_CD_MIYAGI	= '4';

	/**
	 * @var	string	都道府県コード：秋田県 (5)
	 */
	const PREF_CD_AKITA		= '5';

	/**
	 * @var	string	都道府県コード：山形県 (6)
	 */
	const PREF_CD_YAMAGATA	= '6';

	/**
	 * @var	string	都道府県コード：福島県 (7)
	 */
	const PREF_CD_FUKUSHIMA	= '7';

	/**
	 * @var	string	都道府県コード：茨城県 (8)
	 */
	const PREF_CD_IBARAKI	= '8';

	/**
	 * @var	string	都道府県コード：栃木県 (9)
	 */
	const PREF_CD_TOCHIGI	= '9';

	/**
	 * @var	string	都道府県コード：群馬県 (10)
	 */
	const PREF_CD_GUNMA		= '10';

	/**
	 * @var	string	都道府県コード：埼玉県 (11)
	 */
	const PREF_CD_SAITAMA	= '11';

	/**
	 * @var	string	都道府県コード：千葉県 (12)
	 */
	const PREF_CD_CHIBA		= '12';

	/**
	 * @var	string	都道府県コード：東京都 (13)
	 */
	const PREF_CD_TOKYO		= '13';

	/**
	 * @var	string	都道府県コード：神奈川県 (14)
	 */
	const PREF_CD_KANAGAWA	= '14';

	/**
	 * @var	string	都道府県コード：新潟県 (15)
	 */
	const PREF_CD_NIIGATA	= '15';

	/**
	 * @var	string	都道府県コード：富山県 (16)
	 */
	const PREF_CD_TOYAMA	= '16';

	/**
	 * @var	string	都道府県コード：石川県 (17)
	 */
	const PREF_CD_ISHIKAWA	= '17';

	/**
	 * @var	string	都道府県コード：福井県 (18)
	 */
	const PREF_CD_FUKUI		= '18';

	/**
	 * @var	string	都道府県コード：山梨県 (19)
	 */
	const PREF_CD_YAMANASHI	= '19';

	/**
	 * @var	string	都道府県コード：長野県 (20)
	 */
	const PREF_CD_NAGANO	= '20';

	/**
	 * @var	string	都道府県コード：岐阜県 (21)
	 */
	const PREF_CD_GIFU		= '21';

	/**
	 * @var	string	都道府県コード：静岡県 (22)
	 */
	const PREF_CD_SHIZUOKA	= '22';

	/**
	 * @var	string	都道府県コード：愛知県 (23)
	 */
	const PREF_CD_AICHI		= '23';

	/**
	 * @var	string	都道府県コード：三重県 (24)
	 */
	const PREF_CD_TRIPLE	= '24';

	/**
	 * @var	string	都道府県コード：滋賀県 (25)
	 */
	const PREF_CD_SHIGA		= '25';

	/**
	 * @var	string	都道府県コード：京都府 (26)
	 */
	const PREF_CD_KYOTO		= '26';

	/**
	 * @var	string	都道府県コード：大阪府 (27)
	 */
	const PREF_CD_OSAKA		= '27';

	/**
	 * @var	string	都道府県コード：兵庫県 (28)
	 */
	const PREF_CD_HYOGO		= '28';

	/**
	 * @var	string	都道府県コード：奈良県 (29)
	 */
	const PREF_CD_NARA		= '29';

	/**
	 * @var	string	都道府県コード：和歌山県 (30)
	 */
	const PREF_CD_WAKAYAMA	= '30';

	/**
	 * @var	string	都道府県コード：鳥取県 (31)
	 */
	const PREF_CD_TOTTORI	= '31';

	/**
	 * @var	string	都道府県コード：島根県 (32)
	 */
	const PREF_CD_SHIMANE	= '32';

	/**
	 * @var	string	都道府県コード：岡山県 (33)
	 */
	const PREF_CD_OKAYAMA	= '33';

	/**
	 * @var	string	都道府県コード：広島県 (34)
	 */
	const PREF_CD_HIROSHIMA	= '34';

	/**
	 * @var	string	都道府県コード：山口県 (35)
	 */
	const PREF_CD_YAMAGUCHI	= '35';

	/**
	 * @var	string	都道府県コード：徳島県 (36)
	 */
	const PREF_CD_TOKUSHIMA	= '36';

	/**
	 * @var	string	都道府県コード：香川県 (37)
	 */
	const PREF_CD_KAGAWA	= '37';

	/**
	 * @var	string	都道府県コード：愛媛県 (38)
	 */
	const PREF_CD_EHIME		= '38';

	/**
	 * @var	string	都道府県コード：高知県 (39)
	 */
	const PREF_CD_KOCHI		= '39';

	/**
	 * @var	string	都道府県コード：福岡県 (40)
	 */
	const PREF_CD_FUKUOKA	= '40';

	/**
	 * @var	string	都道府県コード：佐賀県 (41)
	 */
	const PREF_CD_SAGA		= '41';

	/**
	 * @var	string	都道府県コード：長崎県 (42)
	 */
	const PREF_CD_NAGASAKI	= '42';

	/**
	 * @var	string	都道府県コード：熊本県 (43)
	 */
	const PREF_CD_KUMAMOTO	= '43';

	/**
	 * @var	string	都道府県コード：大分県 (44)
	 */
	const PREF_CD_MUCH		= '44';

	/**
	 * @var	string	都道府県コード：宮崎県 (45)
	 */
	const PREF_CD_MIYAZAKI	= '45';

	/**
	 * @var	string	都道府県コード：鹿児島県 (46)
	 */
	const PREF_CD_KAGOSHIMA	= '46';

	/**
	 * @var	string	都道府県コード：沖縄県 (47)
	 */
	const PREF_CD_OKINAWA	= '47';

	//==============================================
	// マップ
	//==============================================
	/**
	 * @var	array	都道府県名コードマップ
	 */
	const NAME_MAP = [
		self::PREF_CD_HOKKAIDO	=> '北海道',
		self::PREF_CD_AOMORI	=> '青森県',
		self::PREF_CD_IWATE		=> '岩手県',
		self::PREF_CD_MIYAGI	=> '宮城県',
		self::PREF_CD_AKITA		=> '秋田県',
		self::PREF_CD_YAMAGATA	=> '山形県',
		self::PREF_CD_FUKUSHIMA	=> '福島県',
		self::PREF_CD_IBARAKI	=> '茨城県',
		self::PREF_CD_TOCHIGI	=> '栃木県',
		self::PREF_CD_GUNMA		=> '群馬県',
		self::PREF_CD_SAITAMA	=> '埼玉県',
		self::PREF_CD_CHIBA		=> '千葉県',
		self::PREF_CD_TOKYO		=> '東京都',
		self::PREF_CD_KANAGAWA	=> '神奈川県',
		self::PREF_CD_NIIGATA	=> '新潟県',
		self::PREF_CD_TOYAMA	=> '富山県',
		self::PREF_CD_ISHIKAWA	=> '石川県',
		self::PREF_CD_FUKUI		=> '福井県',
		self::PREF_CD_YAMANASHI	=> '山梨県',
		self::PREF_CD_NAGANO	=> '長野県',
		self::PREF_CD_GIFU		=> '岐阜県',
		self::PREF_CD_SHIZUOKA	=> '静岡県',
		self::PREF_CD_AICHI		=> '愛知県',
		self::PREF_CD_TRIPLE	=> '三重県',
		self::PREF_CD_SHIGA		=> '滋賀県',
		self::PREF_CD_KYOTO		=> '京都府',
		self::PREF_CD_OSAKA		=> '大阪府',
		self::PREF_CD_HYOGO		=> '兵庫県',
		self::PREF_CD_NARA		=> '奈良県',
		self::PREF_CD_WAKAYAMA	=> '和歌山県',
		self::PREF_CD_TOTTORI	=> '鳥取県',
		self::PREF_CD_SHIMANE	=> '島根県',
		self::PREF_CD_OKAYAMA	=> '岡山県',
		self::PREF_CD_HIROSHIMA	=> '広島県',
		self::PREF_CD_YAMAGUCHI	=> '山口県',
		self::PREF_CD_TOKUSHIMA	=> '徳島県',
		self::PREF_CD_KAGAWA	=> '香川県',
		self::PREF_CD_EHIME		=> '愛媛県',
		self::PREF_CD_KOCHI		=> '高知県',
		self::PREF_CD_FUKUOKA	=> '福岡県',
		self::PREF_CD_SAGA		=> '佐賀県',
		self::PREF_CD_NAGASAKI	=> '長崎県',
		self::PREF_CD_KUMAMOTO	=> '熊本県',
		self::PREF_CD_MUCH		=> '大分県',
		self::PREF_CD_MIYAZAKI	=> '宮崎県',
		self::PREF_CD_KAGOSHIMA	=> '鹿児島県',
		self::PREF_CD_OKINAWA	=> '沖縄県',
	];
}
