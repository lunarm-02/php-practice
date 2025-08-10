<?php
$n = [];

for ($i = 0; $i < 3; $i++) {
    $char = trim(fgets(STDIN));
    $n[] = $char;
}
echo implode('|', $n);
?>