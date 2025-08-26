<?php

$a = [];
for ($i = 0; $i<10; $i++){
    $char = trim(fgets(STDIN));
    $a[] = $char;
}

echo implode(" | ", $a);
// for ($i = 0; $i<10; $i++){
//     if ($i < 9) {
//         echo $a[$i] . " | ";
//     } else {
//         echo $a[$i] . "\n";
//     }
// }

?>