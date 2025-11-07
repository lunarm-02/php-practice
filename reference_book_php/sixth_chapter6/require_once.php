<?php
require_once 'included.php';
// 相対パスは起動スクリプトが起点となるので絶対パス require_once__DIR__.'/func2.php';
$area = getTriangleArea(8, 10);
print "三角形の面積は{$area}です。";  // 結果：三角形の面積は40です。
?>