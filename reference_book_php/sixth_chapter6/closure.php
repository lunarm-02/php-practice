<?php
// 高階関数myArrayWalkを定義
function myArrayWalk(array $array, callable $func) : void {
    // 配列$arrayの内容を順に処理
    foreach($array as $key => $value) {
        $func($value, $key);  // $funcで指定された関数を呼び出し
    }
}

$data = ['杉山', '長田', '杉沼', '和田', '土井'];
myArrayWalk($data, function($value, $key) {
    echo "{$key}：{$value}<br />";
});

// 無名関数 function(仮引数, ・・・・・) {// 任意の処理   return 戻り値;}
?>