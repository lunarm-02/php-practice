<?php
// 文字列数
// mb_strlen(string $string [, ?string $encording]) : int
$str = 'WINGSプロジェクト';
print "マルチバイト対応関数" . mb_strlen($str);  // 結果：１１　strlen()関数だと、文字列数ではなく、バイト数として返す。
print PHP_EOL;
print "単にバイト数を返す関数" . strlen($str);
print PHP_EOL;
print "文字の幅を返す関数" . mb_strwidth($str);
// ※英数字は一文字１バイト。日本語はマルチバイトだから利用している文字エンコーディングによって異なる。

// Shift-JISであれば１文字２バイト
// UTF-8であれば１文字３バイト
?>