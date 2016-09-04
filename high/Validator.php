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
}
