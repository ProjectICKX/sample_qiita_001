<?php

/**
 * XSS Safeにした文字列を返します。
 *
 * @param	string	$string	XSS Safeにする文字列
 * @return	string	XSS Safeにした文字列
 */
function e ($string) {
	return htmlentities($string, \ENT_QUOTES, 'UTF-8', false);
}

/**
 * フォーマットし、XSS Safeにした文字列を返します。
 *
 * @param	string	$format
 * @param	mixed	$args[, mixed $args [, mixed $... ]]
 * @return	string	フォーマットし、XSS Safeにした文字列
 */
function esprintf () {
	$args = func_get_args();
	return e(vsprintf($args[0], array_slice($args, 1)));
}
