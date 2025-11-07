<?php
$now = new DateTime();
print $now->format('Y年m月d日 (D) g:i:s a');
        // 結果実行時刻○○○○年○○月○○日 (sat) ○○:○○:○○ pm/am
print $now->format('当月の日数：t日');  // 結果：当月の日数：
?>