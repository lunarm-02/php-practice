<?php
// これまでに見てきた配列関数と違い、引数に直接影響を及ぼすっものではない。スライスされた結果は、戻り値として取得するだけ
// array_slice(array $array, int $offset [, ? int $length [, bool $preserve_keys = false]]) : array
// $array : 任意の配列
// $offset : 抽出開始位置
// $length : 取り出す要素数
// $preserve_keys : 取得した要素のキーを保持するか
$data = ['高江', '青木', '片渕', '和田', '花田', '佐藤'];
print_r(array_slice($data, 2, 3));
    //  Array([0]=>片渕 [1]=>和田 [2]=>花田)
print_r(array_slice($data, 2, 3, true));
    // Array([2]=>片渕 [3]=>和田 [4]=>佐藤)
print_r(array_slice($data, 4));  // Array([0]=>花田 [1]=>佐藤)
print_r(array_slice($data, -4, -3)); // Array([0]=> 片渕)
?>