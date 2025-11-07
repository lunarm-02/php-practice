<?php
// 引数なしでオブジェクトを生成した場合、現在の日付がセットされる。
$now = new DateTime();
print $now->format('Y年m月d日 H:i:s');  // 結果：実行した日付
?>