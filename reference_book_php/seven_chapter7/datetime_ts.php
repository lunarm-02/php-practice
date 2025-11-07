<?php
// タイムスタンプ値を設定する
// time関数は現在のタイムスタンプを求めるための日付/時刻関数。　setTimestampメソッドはタイムスタンプ値を返す関数からDateTimeオブジェクトを生成するのに役立つ。
$now = new DateTime();
$now->setTimestamp(time());
print $now->format('Y年m月d日 H:i:s');  // 結果：実行時刻
?>