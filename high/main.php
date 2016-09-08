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
 *   北海道、青森県、岩手県、宮城県、秋田県、山形県、福島県、茨城県、栃木県、群馬県、埼玉県、千葉県、東京都、神奈川県、新潟県、富山県、石川県、福井県、山梨県、長野県
 * - 西日本に属する都道府県は次の通りとする。
 *   岐阜県、静岡県、愛知県、三重県、滋賀県、京都府、大阪府、兵庫県、奈良県、和歌山県、鳥取県、島根県、岡山県、広島県、山口県、徳島県、香川県、愛媛県、高知県、福岡県、佐賀県、長崎県、熊本県、大分県、宮崎県、鹿児島県、沖縄県
 */

//==============================================
// クラスファイル読み込み
//==============================================
require_once sprintf('%s/functions.php', __DIR__);
require_once sprintf('%s/Prefecture.php', __DIR__);
require_once sprintf('%s/Area.php', __DIR__);
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

if (!Validator::isRelatedPrefCdToAreaCd($pref_cd)) {
	throw new \Exception(esprintf('エリアコードに紐づかない都道府県コードを渡されました。area code:%s, pref code:%s', $area_cd, $pref_cd));
}

if (!Validator::existsAreaCd(Area::PREF_CD_RELATION_MAP[$pref_cd])) {
	throw new \Exception(esprintf('未定義のエリアコードを渡されました。area code:%s, pref code:%s', $area_cd, $pref_cd));
}

//==============================================
// 表示
//==============================================
echo esprintf('%s => %s', Area::NAME_MAP[Area::PREF_CD_RELATION_MAP[$pref_cd]], Prefecture::NAME_MAP[$pref_cd]);
