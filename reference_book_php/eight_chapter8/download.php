<?php
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename = "自分の卒業制作データ.md"');
print file_get_contents('C:\Users\T_ryoga\OneDrive - ooharastudent\デスクトップ\卒業制作_ver_ryoga\企画・プロジェクト計画書\アイデア\SNS　×　キャラクター　×　学習管理のあくまで学習管理アプリ.md');
?>