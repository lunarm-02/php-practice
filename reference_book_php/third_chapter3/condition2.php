<?php
$message = "";
print $message ?: '空です。';  // 結果：空です。
// phpは空文字や、0はfalseを返す

//こうだとmessageが連続し、冗長。
// print $message ? $message : '空です。'
?>