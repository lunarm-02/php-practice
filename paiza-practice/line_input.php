<?php

$line = trim(fgets(STDIN));
$parts = explode(' ', $line);

foreach($parts as $p) {
    echo $p . "\n";
}

// こんなこともできるらしい。第３引数 で分割数の上限（limit）を指定
explode(' ', "a b c d", 2);
// 結果: ["a", "b c d"]

explode(' ', "a b c d", -1);
// 結果: ["a", "b", "c"]
?>