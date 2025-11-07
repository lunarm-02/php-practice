<?php
// 高階関数myArrayWalkを定義
function myArrayWalk(array $array, callable $func) : void {
    // 配列$arrayの内容を順に処理
    foreach($array as $key => $value) {
        $func($value, $key);  // $funcで指定された関数を呼び出し
    }
}

function hoge() {
    $data = [100, 50, 10, 5];
    $result = 0;

    myArrayWalk($data, function($value, $key) {
        global $result;
        $result += $value;
    });

    print "合計値：{$result}";
}

hoge(); // 結果：合計値：０
?>