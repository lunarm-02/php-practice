<?php
// 無条件に配列杯顔要素数をカウントするcount関数に対して、
// array_count_values関数は要素ごとの登場回数をカウントすることができる
// ※カウントできるのは文字列/数値のみ
$data = ['い', 'ろ', 'は', 'に', 'ほ', 'へ', 'と', 'い', 'ろ'];
print_r(array_count_values($data));  // 結果：Array([い] => 2 [ろ] => 2 [は]　=> 1 ...)


// array_count_values関数
// array_count_values(array $array) : array
?>