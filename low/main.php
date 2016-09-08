<?php
/**
 * entry point : main.php
 *
 * この処理系は次の機能を実現します。
 *
 * - get parameterで都道府県コードが与えられた場合に、対応する都道府県名を表示する。
 * - 併せて、都道府県コードに紐づくエリア名も表示し "エリア名 => 都道府県名" のフォーマットで表示する。例）東日本 => 東京都
 * - エリアは東日本、西日本とする。
 * - 東日本に属する都道府県は次の通りとする。
 *   北海道から長野県
 * - 西日本に属する都道府県は次の通りとする。
 *   岐阜県から沖縄県
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
$obj = new Prefecture();
if ($obj->getName($pref_cd) == '') {
	echo 'エラーが発生しました。';
	exit;
}

//==============================================
// 表示
//==============================================
$obj = new Prefecture();
if ($pref_cd <= 20) {
	echo "東日本 => ".$obj->getName($pref_cd);
} else {
	echo "西日本 => ".$obj->getName($pref_cd);
}
