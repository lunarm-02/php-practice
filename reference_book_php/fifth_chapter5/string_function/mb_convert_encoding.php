<?php
// mb_convert_encoding(string|array $string , string $to_encoding [, string|array|null $from_encoding]) : string|array|false
// $string : 任意の文字列、またはその配列
// $to_encoding : 変換後の文字コード
// $from_encoding : 変換前の文字コード（既定はdefault_charsetパラメーターの値）
file_put_contents('result.txt', mb_convert_encoding('こんにちは、赤ちゃん！', 'EUC-JP', 'UTF-8, SJIS, JIS'));
// file_put_contentsは、指定のファイルに文字列を出力するための関数です。
// 上記の書き方の場合、EUP-JPで出力しているので、UTF-8想定のtxtでは文字化けする
// 文字化けの8割は「出力先の想定文字コード　≠　実際の文字コード」
?>