<?php
/**
 * entry point : main.php
 *
 * この処理系は次の機能を実現します。
 *
 * - get parameterで都道府県コードが与えられた場合に、対応する都道府県名を表示する。
 */

//==============================================
// クラスファイル読み込み
//==============================================
require_once sprintf('%s/functions.php', __DIR__);
require_once sprintf('%s/Prefecture.php', __DIR__);
require_once sprintf('%s/Validator.php', __DIR__);

//==============================================
// 初期化
//==============================================
$pref_cd = $_GET['pref_cd'] ?? null;

//==============================================
// 入力値検証
//==============================================
if (!Validator::isNotNull($pref_cd)) {
	throw new \Exception(esprintf('必須入力項目 pref_cd が入力されていません。'));
}

if (!Validator::isNotEmptyString($pref_cd)) {
	throw new \Exception(esprintf('pref_cdが空です。'));
}

if (!Validator::existsPrefCd($pref_cd)) {
	throw new \Exception(esprintf('未定義の都道府県コードを渡されました。pref code:%s', $pref_cd));
}

//==============================================
// 表示
//==============================================
echo esprintf('%s', Prefecture::NAME_MAP[$pref_cd]);
