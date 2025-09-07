<?php
var_dump((int)'0b11'); // 結果：int(0)
var_dump((int)'0777'); // 結果：int(777)
var_dump((int)'0xFF'); // 結果：int(0)
var_dump(bindec('0b11')); // 結果：int(3)
var_dump(octdec('0777')); // 結果：int(511)
var_dump(hexdec('0xFF')); // 結果：int(255)
var_dump((int)'1E4'); // 結果：int(10000)
var_dump((float)'1E4')
?>