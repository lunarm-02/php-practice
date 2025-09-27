<?php
// 配列に特定の要素が存在するかを確認する
$data = ['PHP', 'JavaScript', 'PHP', 'Java', 'C#', '15'];
if(!array_search('PHP', $data)) {
    print '見つかりませんでした';
}
// 要素が存在するにもかかわらず、見つからないのは戻り値の０が暗黙的にfalseとみなされるから
// === falseでは少々冗長なので、in_array関数を使用する
// in_array(mixed $needle, array $haystack [, bool $strict = false]) : bool
// $needle : 検索すべき値
// $haystack : 検索対象の配列
// $strict : 「===」演算子で比較するか
?>