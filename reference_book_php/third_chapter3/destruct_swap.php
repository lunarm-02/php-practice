<?php
$x = 15;
$y = 38;
[$y, $x] = [$x, $y];
print $x;  // 結果：３８
print $y;  // 結果：１５
?>