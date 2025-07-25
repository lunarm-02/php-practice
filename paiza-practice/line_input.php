<?php

$line = trim(fgets(STDIN));
$parts = explode(' ', $line);

foreach($parts as $p) {
    echo $p . "\n";
}
?>