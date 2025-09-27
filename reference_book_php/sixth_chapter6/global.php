<?php
$x = 10;

function checkScope() : int {
    global $x;
    return ++$x;
}

print checkScope();  // 結果：11
print $x;  // 結果：11
?>