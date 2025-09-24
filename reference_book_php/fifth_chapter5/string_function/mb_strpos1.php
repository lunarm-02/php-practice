<?php
// mb_strpos(string $haystack, string $needle[, int $offset [, ?string $encoding]]) : int|false
// mb_strrpos(string $haystack, string $needle[, int $offset [, ?string $encoding]]) : int|false
// $haystack : 検索対象文字列
// $needle : 検索文字列
// $offset : 検索開始位置
// encoding : 使用する文字エンコーディング（省略時はdefault_charsetパラメーターの値）
$str = 'にわにはにわにわとりがいる';
// 最初に現れた位置を返す
print mb_strpos($str, 'にわ');  // 結果：0;
print mb_strpos($str, 'にわ', 2);  // 結果：4
print mb_strpos($str, 'にわ', -10);  // 結果：4
print mb_strpos($str, 'かに');  // 結果：false(表示されない)
// 最後に現れた位置を返す
print mb_strrpos($str, 'にわ'); // 結果：6
print mb_strrpos($str, 'にわ', -8);  // 結果：4
?>