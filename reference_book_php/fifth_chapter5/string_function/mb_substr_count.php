<?php
// mb_strpos関数
// mb_substr_count(string $haystack, string $needle [, ?string $needle]) : int
// $haystack : 検索対象の文字列
// $needle : 検索文字列
// $encoding : 使用する文字エンコーディング（省略時はdefault_charsetパラメーターの値）
// mb_substr_countは重複のない出現数をカウントします。
$str = 'にわにはにわにわとりがいる';
print mb_substr_count($str, 'にわ');  // 結果：３
$str = 'いちいちいちばにいち';
print mb_substr_count($str, 'いちいち'); // 結果：１
// ０～３文字目にヒットした時点で、次は４文字目から検索した結果、出現数は１回となります。
?>