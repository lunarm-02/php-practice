<?php
for ($i = 1; $i < 10; $i++) {
    for ($j = 1; $j < 10; $j++) {
        $result = $i * $j;
        if ($result > 40) { break 1; }  // break ループ階層数 continueについても同様
        print "{$result}" . "\t"; // \tは空白
    }
    print PHP_EOL;  // PHP_EOLは改行
}
?>