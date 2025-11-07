<?php
// スーパーグローバル変数$_ENVは有効になっていない
// variables_order = "GPCS" → variables_order = "EGPCS"
// Environment: 環境変数
// Get: クエリ情報
// Post: ポストデータ
// Cookie: クッキー
// Server: サーバー変数
// この値を変えるとスーパーグローバル変数が生成されなくなる。今回は環境変数を有効化した。
print $_ENV['Path'];
// 結果：実行ファイルまでのパス？

// 流れ
// ➀コマンド入力：php ~
// ➁windowsがPCの環境変数PATHを参照
// ➂環境変数内の複数のディレクトリ：C:\Windows\System32;
//                                C:\php;
//                                C:\Program Files\Git\cmd;
//                                ...
// windowsはこのリストを上から順番に探していき、最初にphp.exeを見つけた場所を実行する
// つまり表示されているのは環境変数内のコマンドを探す対象ディレクトリ一覧
?>