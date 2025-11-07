<?php
// 日付・時刻文字列から生成
$now = new DateTime('2021/5/15 10:58:31');
print $now->format('Y年m月d日 H時i分');  // 結果：2021年05月15日 10時58分
?>