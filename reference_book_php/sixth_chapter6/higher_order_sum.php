<?php
// 高階関数myArrayWalkを定義
function myArrayWalk(array $array, callable $func) : void {
    // 配列$arrayの内容を順に処理
    foreach($array as $key => $value) {
        $func($value, $key);  // $funcで指定された関数を呼び出し
    }
}

$result = 0;   // 結果値を格納するためのグローバル変数
function total(float $value, int $key) : void {
    global $result; // グローバル変数を定義
    $result += $value;  // 配列の値を$resultに加算
}

$data = [100, 50, 10, 5];
myArrayWalk($data, 'total');
print "合計値：{$result}";  // 結果：合計値：165