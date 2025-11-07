<?php
// 高階関数myArrayWalkを定義
function myArrayWalk(array $array, callable $func) : void {
    // 配列$arrayの内容を順に処理
    foreach($array as $key => $value) {
        $func($value, $key);  // $funcで指定された関数を呼び出し
    }
}

$result = 0;   // 結果値を格納するためのグローバル変数

$data = [100, 50, 10, 5];
myArrayWalk($data, function($value, $key) use(&$result) {  // 親スコープから値を引き継ぐことができる。
    $result += $value;
});

print "合計値：{$result}";  // 結果：合計値：165