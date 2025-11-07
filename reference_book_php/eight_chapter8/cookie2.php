<?php 
// setcookie関数
// setcookie(string $name [, string $value [, int $expires = 
// 0 [, string $path 
// [, string $domain [, bool $secure = false
// [, bool $httponly = false]]]]]]) : bool
// $name クッキー名
// $value 値
// $expires 有効期限
// $path　パス　：通常は　/　でサイト全体に。
// $domain　有効なドメイン　：通常は既定のままに（カレントフォルダ）
// $secure
setcookie('email', $_POST['email'], time() - 3600); 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>クッキー情報</title>
    </head>

    <body>
        クッキーを保存しました。
    </body>
</html>