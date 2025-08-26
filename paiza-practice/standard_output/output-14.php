<?php
$N = trim(fgets(STDIN)); // 入力値
echo number_format($N) . "\n";

// 最後にもカンマがつくのでrtrimで削除
// echo rtrim(chunk_split($N, 3, ","), ",") . "\n";

?>