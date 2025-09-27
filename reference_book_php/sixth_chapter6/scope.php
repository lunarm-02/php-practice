<?php
$x = 10;

function checkScope() : int {
    return ++$x;
}

print checkScope();  // 結果：１
print $x;   // 結果：１０
?>