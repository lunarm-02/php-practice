<?php
// 呼び出される都度、呼び出し再開場所から実行される一回目あいうえお　二回目かきくけこ・・・・
function myGen() {
    yield 'あいうえお';
    yield 'かきくけこ';
    yield 'さしすせそ';
}

foreach (myGen() as $value) {
    print $value . PHP_EOL;
}
?>