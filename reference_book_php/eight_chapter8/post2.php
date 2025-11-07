<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>ポストデータ</title>
    </head>

    <body>
        <?php require_once '../selfphp/Encode.php'; ?>
        こんにちは、<?=e($_POST['name'])?> さん！
    </body>
</html>