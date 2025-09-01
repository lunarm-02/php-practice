<?php
$data = [1, 2, 3, 4, 5];

// 両方値が 0 になることもあります（PHP の内部で最適化される場合）
print "=== スキップした場合 ===\n";
$start = memory_get_usage();
[, $a, , $b, $c] = $data;
$end = memory_get_usage();
print "a=$a, b=$b, c=$c\n";
print "使用メモリ: " . ($end - $start) . " bytes\n\n";

print "=== ダミー変数を使った場合 ===\n";
$start = memory_get_usage();
[$_, $a, $_, $b, $c] = $data;
$end = memory_get_usage();
print "a=$a, b=$b, c=$c, _=$_\n";
print "使用メモリ: " . ($end - $start) . " bytes\n";
?>