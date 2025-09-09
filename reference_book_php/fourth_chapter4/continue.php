<?php
// 偶数値の合計
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 !== 0) { continue; }
    $sum += $i;
}

print "合計値は{$sum}です。";  // 結果：合計値は2550です。
?>