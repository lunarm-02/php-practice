<?php
// ローカル変数を維持するために静的変数で定義する：static命令
// 初回呼び出し時のみに初期化される

function checkStatic() : int {
    static $x = 0;
    return ++$x;
}
print chackStatic();  // 結果；１
print chackStatic();  // 結果；２

print $x;  // 結果：空（null）
?>