<?php
// 変数を破棄するunset関数  unset(mixed $var, mixed ...$vars) : void
$str;
var_dump($str); // 結果：NULL
$str = '代入';
var_dump($str); // 結果：string(6)"代入"
unset($str);
var_dump($str);  // 結果：NULL
?>