<?php
// 使用することで文字列前後の空白を除去できる
// trim(string $string [, string $sharacters = "\n\r\t\v\0"]) : string
// ltrim(string $string [, string $characters = "\n\r\t\v\0"]) : string
// rtrim(string $string [, string $characters = "\n\r\t\v\0"]) : string
// $string : 対象の文字列
// $characters : 除去する文字
// タブ文字（\t）
// 改行文字（\n, \r）
// NULLバイト（\0）
// 垂直タブ（\v）
$str = "  こんにちは \t\n\r";
var_dump($str);    // 結果：string(21) "uuこんにちはTab改行"
var_dump(trim($str));   // 結果：string(15) "こんにちは"
var_dump(ltrim($str));  // 結果：string(19) "こんにちは"uTab改行"
var_dump(rtrim($str));  // 結果：string(17) "uuこんにちは"

$str2 = '!======== [独習PHP] ========!';
var_dump(trim($str2, "!= []")); // 結果：string(9) "独習PHP"
?>