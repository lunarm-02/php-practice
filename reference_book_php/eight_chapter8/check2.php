<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>チェックボックス</title>
    </head>

    <body>
        <?php require_once '../selfphp/Encode.php'; ?>
        選択されたのは、<?=e(implode(',', $_POST['lang']))?>です。
    </body>
</html>