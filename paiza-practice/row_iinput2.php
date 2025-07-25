<?php
$ten_string = [];

// 10行の入力を受け取る
for ($i = 1; $i <= 10; $i++) {
    $char = trim(fgets(STDIN));
    $ten_string[] = $char;
}

// 入力から格納された文字列を空白区切りで一行で出力
echo implode(' ', $ten_string) . "\n";
?>