<?php
// array_merge関数：指定された配列要素を連結した結果を返す
// 連想配列のキーが重複している場合には、後者が優先される
// インデックス「番号」が重複している場合には、新たなインデックス番号が振られるため、上書きされることはない。
// 配列のキーが重複した場合に上書きするのではなく、入れ子の配列を生成する関数がある：array_merge_recursive関数
$ary1 = [1, 3, 5];
$ary2 = [2, 3, 6];
$result = array_merge($ary1, $ary2);
print_r($result);  // 結果：Array([0] => 1 [1] => 3)

$assoc1 = ['Apple' => 'Red', 'Orenge' => 'Yellow', 'Melon' => 'Green'];
$assoc2 = ['Grape' => 'Purple', 'Apple' => 'Green', 'Strawberry' => 'Red'];
$result1 = array_merge($assoc1, $assoc2);
print_r($result1);  // 結果：Array([Apple]=>Green [Orange]=>Yellow [Melon]=>Green [Grape]=>Purple [Strawberry]=>Red)
$result2 = array_merge_recursive($assoc1, $assoc2);
print_r($result2);
?>