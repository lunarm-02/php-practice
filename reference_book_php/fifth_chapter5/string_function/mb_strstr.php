<?php
// 検索対象の文字を起点に前方、後方を選んで取得
$str = 'WINGSプロジェクト';
print mb_strstr($str, 'S', true); // 結果：WING
print PHP_EOL;
print mb_strstr($str, 'S'); // 結果：Sプロジェクト
print PHP_EOL;
print mb_strstr($str, 'M', false); // 結果：false(表示されない)
?>