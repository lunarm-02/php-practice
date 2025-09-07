<?php
$data01 = [1, 2, 3];
$data02 = [1, 5];
var_dump($data01 < $data02);  // 結果bool (false)

$data11 = [1, 2, 3];
$data12 = [1, 5, 1];
var_dump($data11 < $data12);  // 結果bool (true)
// 要素数が同じならば個々の要素を比較し、2<5があるからtrueになるらしい

$data21 = [1, 2, 3];
$data22 = [1, 2, '3'];
var_dump($data21 == $data22);  //結果 bool (true)
var_dump($data21 === $data22);  // 結果bool (false)

$data31 = ['A' => 'a', 'B' => 'b', 'C' => 'c'];
$data32 = ['A' => 'a',  'C' => 'c', 'B' => 'b'];
var_dump($data31 == $data32);  // 結果：bool(true)
var_dump($data31 === $data32); // 結果：bool(false)
// 厳密な等価演算子は 要素数、キーと値、要素の並び順の３つが判定対象
?>