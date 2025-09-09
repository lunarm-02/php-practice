<?php
// 文字列の大文字、小文字変換
$data1 = 'Wings project';
$data2 = 'WINGSプロジェクト';
$data3 = 'Fußball';

print mb_convert_case($data1, MB_CASE_UPPER); // 結果：WINGS PROJECT
print PHP_EOL;
print mb_convert_case($data1, MB_CASE_LOWER); // 結果：wings project
print PHP_EOL;
print mb_convert_case($data1, MB_CASE_TITLE); // 結果：Wings Project
print PHP_EOL;
print mb_convert_case($data2, MB_CASE_LOWER); // 結果：wingsプロジェクト
print PHP_EOL;
// ドイツ語のエスツェットはssを表すのでMB_CASE_UPPERでは分解されてFUSSBALLになる
print mb_convert_case($data3, MB_CASE_UPPER); // 結果：FUSSBALL
print PHP_EOL;
// MB_CASE_XXXXXX_SIMPLEは、シンプルな文字列長が変化しない変換
print mb_convert_case($data3, MB_CASE_UPPER_SIMPLE); // 結果：fußBALL
?>