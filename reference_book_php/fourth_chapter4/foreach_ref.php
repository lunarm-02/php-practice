<?php
// 参照渡し &
$data = ['高江', '掛谷', '日尾', '薄井', '和田'];
foreach ($data as &$value) {
    $value = 'New' . $value;
}
// dataの中身が変わっていることを確認
print_r($data)
?>