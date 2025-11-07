<?php
// テキストファイルへの書き込み

// 書き込み内容を配列$dataにセット
$data[] = date('Y/m/d H:i:s');
$data[] = $_SERVER['SCRIPT_NAME'] ?? __FILE__;
$data[] = $_SERVER['HTTP_USER_AGENT'] ?? 'CLI';
$data[] = $_SERVER['HTTP_REFERER'] ?? 'NONE';
// access.logを追記書き込みモードでオープン

// ファイルオープンに成功すると戻り値としてファイルハンドルを返す（ファイルハンドル：ファイルを操作するためのキーとなる情報）
// die関数は指定されたメッセージを出力して、スクリプトを強制終了するための関数
$file = @fopen('access.log', 'a') or die('ファイルを書き込めませんでした！');

// flock(resource $stream, int $operation) : bool
// $stream : ファイルハンドル
// $operation : ロックモード

// 特殊なロックモード：LOCK_NB（非ブロックモード）論理和演算子で結合し使用する。
// 既定では対象filegロックされているときに自分がロックできるようになるまで待機しますが（ブロックモード）、
// |LOCK_NB付きの場合即座にfalseを返す（非ブロックモード）

// ファイルのロック
flock($file, LOCK_EX);
// ファイルの書き込み（エイリアスとしてfputs関数もある）
fwrite($file, implode("\t", $data) . "\n");
// ロックの解除
flock($file, LOCK_UN);
// ファイルのクローズ
fclose($file);
print 'アクセスログを記録しました。';
?>