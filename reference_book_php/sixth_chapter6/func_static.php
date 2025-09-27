<?php
$area = getTriangleArea(8, 10);
print "三角形の面積は{$area}です。";  // 結果：三角形の面積は40です。

function getTriangleArea(float $base, float $height) : float {
    return $base * $height / 2;
}
?>