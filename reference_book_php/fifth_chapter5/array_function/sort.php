<?php
// 配列の内容を並び替える -- 通常配列に対する、sort関数(連想配列に使用すると、インデックス、キーが初期化されて0から振られる)
// 連想配列に対しての並び替えは、asort/arsort, ksort/krsort関数を使います。前者は値を、後者はキーをソートするための関数

// sort(array &$array [, int $flags = SORT_REGULAR]) : bool
// &$array : ソート対象の配列
// $flags : 比較対象の方法
$data = ['Tennis', 'Swimming', 'Soccer', 'Baseball'];
sort($data, SORT_STRING);
print_r($data);
    // 結果：Array([0]=>Baseball [1]=>Soccer [2]=>Swimming [3]=>Tennis)
rsort($data, SORT_STRING);
print_r($data);
    // 結果：Array([0]=>Tennis [1]=>Swimming [2]=>Soccer [3]=>Baseball)

$data2 = ['Tennis' => 1, 'Swimming' => 1, 'Soccer' => 11, 'Baseball' => 9];
sort($data2, SORT_NUMERIC);
print_r($data2);   // 結果：Array([0]=>1 [1]=>1 [2]=>9 [3]=>11)

$data3 = ['Tennis' => 1, 'Swimming' => 1, 'Soccer' => 11, 'Baseball' => 9];
asort($data3, SORT_NUMERIC);
print_r($data3);
    // 結果：Array([Tennis]=>1 [Swimming]=>1 [Baseball]=>9 [Tennis]=>11)
ksort($data3, SORT_STRING);
print_r($data3);
    // 結果：Array([Baseball] => 9 [Soccer] => 11 [Swimming] => 1 [Tennis] => 1)
?>