<?php
$N = trim(fgets(STDIN));
$result = "";
$count = 0;

for ($i = strlen($N) - 1; $i >= 0; $i--) {
    $result = $N[$i] . $result;
    $count++;
    if ($count % 3 == 0 && $i != 0) {
        $result = "," . $result;
    }
}

echo $result . "\n";
?>