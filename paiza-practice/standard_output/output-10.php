<?php
$number = trim(fgets(STDIN));

if (ctype_digit($number)) {
    $num = (int)$number;
    for ($i = 0; $i < $num; $i++) {
        echo $i + 1 . "\n";
    }
} else {
    echo "0以上の数値で入力してください。";
}
?>