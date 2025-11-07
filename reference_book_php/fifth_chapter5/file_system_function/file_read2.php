<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>アクセスログ</title>
    <!-- Boostrapを有効化 -->
    <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <table class = "table">
        <thead>
            <tr>
                <th>アクセス日時</th><th>スクリプト名</th><th>ユーザエージェント</th><th>リンク元のURL</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // fgets(resource $handle [, int $length]) : string|false
            // $hadle : ファイルハンドル
            // $length : 読み込み最大長（バイト単位）

            // ファイルオープンを読み取り専用でオープン
            $file = @fopen('access.log', 'r');
            // ファイルを共有ロック
            flock($file, LOCK_SH);

            // 行単位でテキストを読み込み＆タブ文字で分割
            while ($line = fgets($file, 1024)) {
                $line = explode("\t", "trim($line)");
                print '<tr>';
                // 分割した結果を順に出力
                foreach ($line as $value) {
                    print '<td>' . $value . '</td>';
                }
                print '</tr>';
            }
            // ロックの解除
            flock($file, LOCK_UN);

            // ファイルをクローズ
            fclose($file);
            ?>
        </tody>
    </table>
</body>
</html>