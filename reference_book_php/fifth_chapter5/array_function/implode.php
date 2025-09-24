<?php
// 配列の各要素を結合するimplode関数
// implode(string $separator, array $array) : string
// $separator : 連結に使用する文字列
// $array : 連結する配列

$data = ['PHP', 'Perl', 'Ruby', 'Python', 'JavaScript'];
print_r($data);
print implode(',', $data);  // 結果：PHP,Perl,Ruby,Python,JavaScript
?>