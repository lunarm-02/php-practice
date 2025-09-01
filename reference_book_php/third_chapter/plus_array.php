<?php

// ( point )  左の配列に存在しないキーの要素を右の配列から取り出し、左の配列に追加する　※[1,2,3,4,5]のようにするにはarray_merge命令を利用するべき
$assoc1 = [
    'Apple' => 'Red',   
    'Orenge' => 'Yellow',
    'Melon' => 'Green'
];
$assoc2 = [
    'Grope' => 'Purple',
    'Apple' => 'Green',
    'Strowberry' => 'Red'
];
$result = $assoc1 + $assoc2;
print_r($result);


$ary1 = [1, 3, 5];
$ary2 = [2, 3, 6];
$result = $ary1 + $ary2;
print_r($result);

?>