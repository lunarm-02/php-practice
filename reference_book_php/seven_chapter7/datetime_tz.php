<?php
$dt1 = new DateTime(null, new DateTimeZone('Asia/Ulan_Bator'));
print $dt1->format('Y年m月d日 H時i分') . "アジア" . PHP_EOL ;  // 結果：実行時刻
$dt2 = new DateTime(null, new DateTimeZone('America/Virgin'));
print $dt2->format('Y年m月d日 H時i分') . "アメリカ" . PHP_EOL ;  // 結果：実行時刻
$dt3 = new DateTime(null, new DateTimeZone('Europe/London'));
print $dt3->format('Y年m月d日 H時i分s秒') . "ヨーロッパ";  // 結果：実行時刻

?>