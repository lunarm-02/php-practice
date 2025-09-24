<?php
// 文字列を特定の区切り文字で区切り、配列内に分割する
// explode(string $separator, string $string [, $limit = PHP_INT_MAX]) : array
// $separator : 区切り文字
// $string : 分割する文字列
// $limit : 分割の最大数
$data = 'リオとニンザブロウとナミとリンリン';
print_r(explode('と', $data));
        // 結果：Array([0] => リオ [1] => ニンザブロウ [2] => ナミ [3] => リンリン)
print_r(explode('や', $data));
        // 結果：Array([0] => リオとニンザブロウとナミと リンリン)
print_r(explode('と', $data, 2));
        // 結果：Array([0] => リオ [1] => ニンザブロウとナミとリンリン)
print_r(explode('と', $data, -2));    // 分割した後、後方から指定数を除く分割結果
        // 結果：Array([0] => リオ [1] => ニンザブロウ)
?>