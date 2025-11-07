<?php
$now = new DateTime();
$now->setDate(2021, 6, 25);
$now->setTime(14, 35, 59);   // 分を70に変更しても1時間１０分と適切に求めてくれる
print $now->format('Y年m月d日 H:i:s');
?>