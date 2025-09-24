<?php
// 文字列に特定の文字列が含まれているか判定する関数
//str_contains(string $haystack, string $needle) : bool
//str_starts_with(string $haystack, string $needle) : bool
//str_ends_with(string $haystack, string $needle) : bool
// $haystack : 検索対象の文字列
// needle : 検索文字列

$str = 'WINGSプロジェクト';
// str_contains関数は以前mb_strpos($str, 'プロ') !== falseのようにあらわしていたもの
var_dump(str_contains($str, 'プロ'));  // 結果：bool (true)
var_dump(str_starts_with($str, 'WINGS'));  // 結果：bool (true)
var_dump(str_ends_with($str, 'WINGS'));  // 結果：bool (false)
?>