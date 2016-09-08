<?php

/**
 * エリアの情報を扱います。
 */
class Area {
	//==============================================
	// コード値
	//==============================================
	/**
	 * @var	string	エリアコード：東日本 (1)
	 */
	const AREA_CD_EAST_JP	= '1';

	/**
	 * @var	string	エリアコード：西日本 (2)
	 */
	const AREA_CD_WEST_JP	= '2';

	/**
	 * @var	string	エリアコード：北海道 (3)
	 */
	const AREA_CD_HOKKAIDO	= '3';

	/**
	 * @var	string	エリアコード：九州 (4)
	 */
	const AREA_CD_KYUSYU	= '4';

	//==============================================
	// マップ
	//==============================================
	/**
	 * @var	array	エリア名コードマップ
	 */
	const NAME_MAP = [
		self::AREA_CD_HOKKAIDO	=> '北海道',
		self::AREA_CD_EAST_JP	=> '東日本',
		self::AREA_CD_WEST_JP	=> '西日本',
		self::AREA_CD_KYUSYU	=> '九州',
	];

	/**
	 * @var	array	都道府県コード、エリアコード変換マップ
	 */
	const PREF_CD_RELATION_MAP = [
		Prefecture::PREF_CD_HOKKAIDO	=> self::AREA_CD_HOKKAIDO,
		Prefecture::PREF_CD_AOMORI		=> self::AREA_CD_EAST_JP,
		Prefecture::PREF_CD_IWATE		=> self::AREA_CD_EAST_JP,
		Prefecture::PREF_CD_MIYAGI		=> self::AREA_CD_EAST_JP,
		Prefecture::PREF_CD_AKITA		=> self::AREA_CD_EAST_JP,
		Prefecture::PREF_CD_YAMAGATA	=> self::AREA_CD_EAST_JP,
		Prefecture::PREF_CD_FUKUSHIMA	=> self::AREA_CD_EAST_JP,
		Prefecture::PREF_CD_IBARAKI		=> self::AREA_CD_EAST_JP,
		Prefecture::PREF_CD_TOCHIGI		=> self::AREA_CD_EAST_JP,
		Prefecture::PREF_CD_GUNMA		=> self::AREA_CD_EAST_JP,
		Prefecture::PREF_CD_SAITAMA		=> self::AREA_CD_EAST_JP,
		Prefecture::PREF_CD_CHIBA		=> self::AREA_CD_EAST_JP,
		Prefecture::PREF_CD_TOKYO		=> self::AREA_CD_EAST_JP,
		Prefecture::PREF_CD_KANAGAWA	=> self::AREA_CD_EAST_JP,
		Prefecture::PREF_CD_NIIGATA		=> self::AREA_CD_EAST_JP,
		Prefecture::PREF_CD_TOYAMA		=> self::AREA_CD_EAST_JP,
		Prefecture::PREF_CD_ISHIKAWA	=> self::AREA_CD_EAST_JP,
		Prefecture::PREF_CD_FUKUI		=> self::AREA_CD_EAST_JP,
		Prefecture::PREF_CD_YAMANASHI	=> self::AREA_CD_EAST_JP,
		Prefecture::PREF_CD_NAGANO		=> self::AREA_CD_EAST_JP,
		Prefecture::PREF_CD_GIFU		=> self::AREA_CD_WEST_JP,
		Prefecture::PREF_CD_SHIZUOKA	=> self::AREA_CD_WEST_JP,
		Prefecture::PREF_CD_AICHI		=> self::AREA_CD_WEST_JP,
		Prefecture::PREF_CD_TRIPLE		=> self::AREA_CD_WEST_JP,
		Prefecture::PREF_CD_SHIGA		=> self::AREA_CD_WEST_JP,
		Prefecture::PREF_CD_KYOTO		=> self::AREA_CD_WEST_JP,
		Prefecture::PREF_CD_OSAKA		=> self::AREA_CD_WEST_JP,
		Prefecture::PREF_CD_HYOGO		=> self::AREA_CD_WEST_JP,
		Prefecture::PREF_CD_NARA		=> self::AREA_CD_WEST_JP,
		Prefecture::PREF_CD_WAKAYAMA	=> self::AREA_CD_WEST_JP,
		Prefecture::PREF_CD_TOTTORI		=> self::AREA_CD_WEST_JP,
		Prefecture::PREF_CD_SHIMANE		=> self::AREA_CD_WEST_JP,
		Prefecture::PREF_CD_OKAYAMA		=> self::AREA_CD_WEST_JP,
		Prefecture::PREF_CD_HIROSHIMA	=> self::AREA_CD_WEST_JP,
		Prefecture::PREF_CD_YAMAGUCHI	=> self::AREA_CD_WEST_JP,
		Prefecture::PREF_CD_TOKUSHIMA	=> self::AREA_CD_WEST_JP,
		Prefecture::PREF_CD_KAGAWA		=> self::AREA_CD_WEST_JP,
		Prefecture::PREF_CD_EHIME		=> self::AREA_CD_WEST_JP,
		Prefecture::PREF_CD_KOCHI		=> self::AREA_CD_WEST_JP,
		Prefecture::PREF_CD_FUKUOKA		=> self::AREA_CD_KYUSYU,
		Prefecture::PREF_CD_SAGA		=> self::AREA_CD_KYUSYU,
		Prefecture::PREF_CD_NAGASAKI	=> self::AREA_CD_KYUSYU,
		Prefecture::PREF_CD_KUMAMOTO	=> self::AREA_CD_KYUSYU,
		Prefecture::PREF_CD_MUCH		=> self::AREA_CD_KYUSYU,
		Prefecture::PREF_CD_MIYAZAKI	=> self::AREA_CD_KYUSYU,
		Prefecture::PREF_CD_KAGOSHIMA	=> self::AREA_CD_KYUSYU,
		Prefecture::PREF_CD_OKINAWA		=> self::AREA_CD_KYUSYU,
	];
}
