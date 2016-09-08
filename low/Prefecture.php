<?php

/**
 * 都道府県の情報を扱います。
 */
class Prefecture {
	public function getName ($pref_cd) {
		if ($pref_cd == 1) {
			$n = '北海道';
		} else if ($pref_cd == 2) {
			$n = '青森県';
		} else if ($pref_cd == 3) {
			$n = '岩手県';
		} else if ($pref_cd == 4) {
			$n = '宮城県';
		} else if ($pref_cd == 5) {
			$n = '秋田県';
		} else if ($pref_cd == 6) {
			$n = '山形県';
		} else if ($pref_cd == 7) {
			$n = '福島県';
		} else if ($pref_cd == 8) {
			$n = '茨城県';
		} else if ($pref_cd == 9) {
			$n = '栃木県';
		} else if ($pref_cd == 10) {
			$n = '群馬県';
		} else if ($pref_cd == 11) {
			$n = '埼玉県';
		} else if ($pref_cd == 12) {
			$n = '千葉県';
		} else if ($pref_cd == 13) {
			$n = '東京都';
		} else if ($pref_cd == 14) {
			$n = '神奈川県';
		} else if ($pref_cd == 15) {
			$n = '新潟県';
		} else if ($pref_cd == 16) {
			$n = '富山県';
		} else if ($pref_cd == 17) {
			$n = '石川県';
		} else if ($pref_cd == 18) {
			$n = '福井県';
		} else if ($pref_cd == 19) {
			$n = '山梨県';
		} else if ($pref_cd == 20) {
			$n = '長野県';
		} else if ($pref_cd == 21) {
			$n = '岐阜県';
		} else if ($pref_cd == 22) {
			$n = '静岡県';
		} else if ($pref_cd == 23) {
			$n = '愛知県';
		} else if ($pref_cd == 24) {
			$n = '三重県';
		} else if ($pref_cd == 25) {
			$n = '滋賀県';
		} else if ($pref_cd == 26) {
			$n = '京都府';
		} else if ($pref_cd == 27) {
			$n = '大阪府';
		} else if ($pref_cd == 28) {
			$n = '兵庫県';
		} else if ($pref_cd == 29) {
			$n = '奈良県';
		} else if ($pref_cd == 30) {
			$n = '和歌山県';
		} else if ($pref_cd == 31) {
			$n = '鳥取県';
		} else if ($pref_cd == 32) {
			$n = '島根県';
		} else if ($pref_cd == 33) {
			$n = '岡山県';
		} else if ($pref_cd == 34) {
			$n = '広島県';
		} else if ($pref_cd == 35) {
			$n = '山口県';
		} else if ($pref_cd == 36) {
			$n = '徳島県';
		} else if ($pref_cd == 37) {
			$n = '香川県';
		} else if ($pref_cd == 38) {
			$n = '愛媛県';
		} else if ($pref_cd == 39) {
			$n = '高知県';
		} else if ($pref_cd == 40) {
			$n = '福岡県';
		} else if ($pref_cd == 41) {
			$n = '佐賀県';
		} else if ($pref_cd == 42) {
			$n = '長崎県';
		} else if ($pref_cd == 43) {
			$n = '熊本県';
		} else if ($pref_cd == 44) {
			$n = '大分県';
		} else if ($pref_cd == 45) {
			$n = '宮崎県';
		} else if ($pref_cd == 46) {
			$n = '鹿児島県';
		} else if ($pref_cd == 47) {
			$n = '沖縄県';
		} else {
			$n = '';
		}
		return $n;
	}
}
