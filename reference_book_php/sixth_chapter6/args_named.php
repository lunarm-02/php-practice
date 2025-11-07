<?php
require_once __DIR__ . '/included.php';

print getTriangleArea(height: 10);  // 結果：２５（前方の引数だけを省略）
print getTriangleArea(height: 10, base: 50);  // 結果：１５０（引数の順番を入れ替えた）
?>