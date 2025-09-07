<?php
// 実行演算子：囲んだブロックをシェルコマンドとして実行
$result = `dir`;  
// var_dump($result);
print mb_convert_encoding($result, 'UTF-8', 'SJIS');  // 文字コードを変換する関数
// windows環境ではdirの出力結果はshift-jisであるため、スクリプトの文字コードutf-8と合致していないため
