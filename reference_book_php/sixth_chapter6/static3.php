<?php
function checkStatic() : void {
    static $x = 0;
    $x++;
    print "unset前：{$x}";
    unset($x);  // この時点では、静的変数を解除して一時的に$xをローカル変数にしているだけ。見せかけで消しているように見せているだけ
    $x = 13;
    print "unset後：{$x}" . PHP_EOL;
}

checkStatic(); // 結果：unset前：１ unset後：13
checkStatic(); // 結果：unset前：２ unset後：13

?>