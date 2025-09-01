<?php
// 分割代入
$data = [1, 2, 3, 4, 5 ];
[$a, $b, $c, $d, $e] = $data;
// list関数でも代用できるlist($a, $b, $c, $d, $e) = $data
print $a;
print $b;
print $c;
print $d;
print $e;   
?>