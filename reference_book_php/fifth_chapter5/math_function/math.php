<?php
// 絶対値
print abs(-100);  // 結果：100
// 進数変換
print base_convert(100, 2, 10);  // 結果：4
// 小数点以下切り上げ
print ceil(1234.56); // 結果：1235
// 切り捨て
print floor(1234.56);  // 結果：1234
// 割り算の整数値
print intdiv(10, 3); // 結果：3
// 割り算の余り値
print fmod(10.5, 5); // 結果：0.5
// 最大値
print max(1, 5, 3);  // 結果：5
// 最小値
print min(1, 5, 3);  // 結果：1
// 乱数取得
print rand(5, 10); // 結果：5~10の一つ。
// 累乗計算
print pow(2, 4);  // 結果：16
// 小数点以下、第二引数桁で数値を丸め
print round(123.456, 2);  // 結果：123.46
// 平方根
print sqrt(10000);  // 結果：100
// 円周率
// print pi();

// 三角関数
print cos(deg2rad(60)); // 結果：0.5 
print sin(deg2rad(30)); // 結果：0.5
print tan(deg2rad(45)); // 結果：1
// 度→ラジアン
print deg2rad(180);  // 結果：3.1415926535898
// ラジアン→度
// print rad2deg(180);

// 対数関数
// eの$num乗
print exp(1);  // 結果：2.718281828459
// 底10の対数
print log10(100);  // 結果：２
// 底$baseの対数（既定ではe）
print log(125, 5); // 結果：３  
?>