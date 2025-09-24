<?php
// str_replace関数　str_replace(string|array $search, string|array $replace, string|array $subject [, int &$count]) : string|array
// search:置き換える文字列
// replace:置き換え後の文字列
// subject:対象の文字列
// &$count: 置き換えた文字列の個数を格納する変数
$str = 'にわにはにわにわとりがいる';
print str_replace('にわ', 'ニワ', $str, $cnt);
print PHP_EOL;
print "{$cnt}個の置き換えをしました。";
?>