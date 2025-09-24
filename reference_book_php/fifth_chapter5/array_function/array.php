<?php
// 配列の先頭/末尾に要素を追加・削除する
// array_push/array_unshift関数は戻り値：追加後の要素数
// array_pop/array_shift関数は戻り値：除去した要素の値
$data = ['高江', '青木', '片渕'];
print array_push($data, '山田', '土井');  // 結果：５（要素）
print_r($data);  // 結果：Array([0]=>高江 [1]=>青木 [2]=>片渕 [3]=>山田 [4]=>土井)
print array_pop($data);  // 結果：土井
print_r($data); // 結果：Array([0]=>高江 [1]=>青木 [2]=>片渕 [3]=>山田)
print array_shift($data);  // 結果：高江
print_r($data);  // 結果：Array([0]=>青木 [1]=>片渕 [2]=>山田)

?>