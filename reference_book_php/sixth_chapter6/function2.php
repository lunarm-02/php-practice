<?php
function getTriangleArea(float $base, float $height) : float {
    return $base * $height / 2;
}

$area = getTriangleArea(8, 10);
print "三角形の面積は{$area}です。";
// $area = getTriangleArea(8, 'x');  // 結果：エラー
// $area = getTriangleArea(8, '10'); // 結果：４０
// 型宣言では、意図していない方が渡された場合にも、最大限、宣言された型に変換しようと試みる。
// 寛容さを回避したいのであれば、先頭にdeclare(strict_types=1);
// declare命令は、実行エンジンに対して、スクリプトの処理方法を指示するための仕組みです。

// null許容型
function hoge(?int $value) : void {
    var_dump($value);
}

hoge(100);  // 結果：int(100)
hoge(null); // 結果：NULL
hoge(); // 結果：エラー

// Union型
// function getTriangleArea(string|float $base, string|float $height) : float {...}
?>