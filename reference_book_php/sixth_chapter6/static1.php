<?php
function checkStatic() : int {
    $x = 0;
    return ++$x;
}

print checkStatic();  // 結果：１
print checkStatic();  // 結果：１
?>