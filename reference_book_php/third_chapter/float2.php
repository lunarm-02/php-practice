<?php
// 浮動小数点数の演算に注意というお話
$add = bcadd(0.1, 0.7, 1);
$mul = bcmul($add, 10, 1);
print floor($mul);  // 結果：8

// 任意精度数学関数
// (右オペランド, 左オペランド, 小数点以下の桁数)
// bcadd()：加算、bcsub()：減算、bcmul()：乗算、bcdiv()：乗算、
// bccomp()：比較
?>