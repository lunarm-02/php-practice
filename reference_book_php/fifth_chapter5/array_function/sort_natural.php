<?php
// SORT_STIRNGでは辞書順にソートされるので、15,18は2よりも小さいとみなされる
// SORT_NATURALで文字列と数値の混在値を人間が行うのに近い手法で並べ替える
$data = ['img15.png', 'img5.png', 'img2.png', 'img18.png', 'img3png'];
sort($data, SORT_STRING);
print_r($data);  // 結果：Array([0]=>img15.png [1]=>img18.png [2]=>img2.png [3]=>img3.png [4]=>img5.png)
?>