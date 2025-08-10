<?php
$char = trim(fgets(STDIN));
$string = explode(' ', $char);
echo implode(',', $string);
?>