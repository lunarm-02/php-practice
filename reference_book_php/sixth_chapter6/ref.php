<?php

// 引数の参照渡し-2度目の$value値は１１になる。
function increment(int &$num) : int {
    $num++;
    return $num;
}

$value = 10;
print increment($value);  // 結果：１１
print $value;   // 結果：１０
?>