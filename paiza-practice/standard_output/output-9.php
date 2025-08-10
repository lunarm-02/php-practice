<?php
$number = trim(fgets(STDIN));

if ($number == 1) {
    for ($i = 0; $i < $number; $i++) {
        echo $i + 1;
    }
} else if ($number == 2) {
    for ($i = 0; $i < $number; $i++) {
        echo $i + 1 . "\n";
    }
}
?>