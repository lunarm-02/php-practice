<?php
// 入れ子配列の分解
$data = [1, 2, [31, 32, 33]];
[$a, $b, $c] = $data;
print_r($a);  // 結果：１
print_r($b);  // 結果：２
print_r($c);  // 結果：Array ( [0] => 31 [1] => 32 [2] => 33 )

[$x, $y, [$z1, $z2, $z3]] = $data;
print $x;   // 結果：１
print $y;   // 結果：２
print $z1;  // 結果：３１
print $z2;  // 結果：３２
print $z3;  // 結果：３３
?>