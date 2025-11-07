<?php require_once '../selfphp/Encode.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>ヘッダー情報</title>
        <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    </head>
    <body>
        <table class = "table">
            <?php
            // $_SERVERはリクエストヘッダーのほかにサーバー変数を含むので識別するためにハイフンがアンダースコアに、接続辞としてHTTP_が前につく
            // つまりUser-Agentヘッダー（どの環境からアクセスされたか）を取得するには$_SERVER['HTTP_USER_AGENT']のようになる
            // $_SERVERのキー/値を順に取得
            foreach($_SERVER as $key => $value) {
                // キー　（$key）が「HTTP_」で始まる場合のみ、その値を出力
                if (str_starts_with($key, 'HTTP_')) {
                    ?>
                    <tr valign="top">
                        <th><?=e($key)?></th>
                        <td><?=e($value)?></td>
                    </tr>
                    <?php
                    // if ($key === 'HTTP_USER_AGENT') {
                    //     break;
                    // }
                }
            }
            ?>
        </table>
    </body>
</html>