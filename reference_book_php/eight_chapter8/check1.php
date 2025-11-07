<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>チェックボックス</title>
    </head>

    <body>
        <!-- action属性にはポストデータの送信先を指定 --> 
        <form method="POST" action ="check2.php">
            あなたがよく使用する言語は？</br>
            <input id = "php" type = "checkbox" name = "lang[]" value = "PHP" />
            <label for ="php">PHP</label>
            <input id = "java" type = "checkbox" name = "lang[]" value = "Java" />
            <label for ="php">Java</label>
            <input id = "csharp" type = "checkbox" name = "lang[]" value = "C#" />
            <label for ="csharp">C#</label>
            <input type = "submit" value = "送信" />
        </form>
    </body>
</html>