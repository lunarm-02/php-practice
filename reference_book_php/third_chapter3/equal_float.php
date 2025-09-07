<?php
const EPSILON = 0.00001;
$x = 0.123456;
$y = 0.123455;
// absは絶対値を求める
var_dump(abs($x-$y) < EPSILON); // 結果：bool (true)
?>