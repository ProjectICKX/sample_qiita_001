<?php

/**
 * 検証に掛かる処理を扱います。
 */
class Validator {
	//==============================================
	// 共通
	//==============================================
	/**
	 * 値がnull以外かどうか判定します。
	 *
	 * @param	mixed	$value	検証値
	 * @return	bool	値がnull以外の場合はtrue そうでない場合はfalse
	 */
	public static function isNotNull ($value) {
		return $value !== null;
	}

	/**
	 * 値が空文字列以外かどうか判定します。
	 *
	 * @param	mixed	$value	検証値
	 * @return	bool	値が空文字列以外の場合はtrue そうでない場合はfalse
	 */
	public static function isNotEmptyString ($value) {
		return $value !== '';
	}

	//==============================================
	// 特化
	//==============================================
	/**
	 * 値が有効な都道府県コードかどうか判定します。
	 *
	 * @param	mixed	$value	検証値
	 * @return	bool	値が有効な都道府県コードの場合はtrue そうでない場合はfalse
	 */
	public static function existsPrefCd ($value) {
		return isset(Prefecture::NAME_MAP[$value]);
	}

	/**
	 * 値が有効なエリアコードかどうか判定します。
	 *
	 * @param	mixed	$value	検証値
	 * @return	bool	値が有効なエリアコードの場合はtrue そうでない場合はfalse
	 */
	public static function existsAreaCd ($value) {
		return isset(Area::NAME_MAP[$value]);
	}

	/**
	 * 値がエリアに紐づく都道府県コードかどうか判定します。
	 *
	 * @param	mixed	$value	検証値
	 * @return	bool	値がエリアに紐づく都道府県コードの場合はtrue そうでない場合はfalse
	 */
	public static function isRelatedPrefCdToAreaCd ($value) {
		return isset(Area::PREF_CD_RELATION_MAP[$value]);
	}
}
