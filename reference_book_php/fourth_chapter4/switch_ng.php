<?php
// switch命令は厳密等価演算子じゃなくただの等価演算子
$exp = '3E2';
switch ($exp) {
    case 300:
        print '値は300';
        break;
    case '3E2':
        print '値は3E2';
        break;
}   // 結果：値は300 
?>