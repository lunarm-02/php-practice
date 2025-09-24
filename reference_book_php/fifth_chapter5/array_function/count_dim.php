<?php
// た次元配列の場合、戻り値はarray型要素の個数で３になる
$data = [
    ['X-1', 'X-2', 'X-3'],
    ['Y-1', 'Y-2', 'Y-3'],
    ['Z-1', 'Z-2', 'Z-3']
];

print count($data) . PHP_EOL;  // 結果：３
// 入れ子になった葉入れtまでカウントしたい場合、$modeにCOUNT_RECURSIVEを指定する
print count($data, COUNT_RECURSIVE);  // 結果：12
?>