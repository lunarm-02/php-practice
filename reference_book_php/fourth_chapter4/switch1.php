<?php
$rank = '??';
switch ($rank) {  // switchブロックそのものは脱出する仕組みをそろえてはいない。
    case '甲':
        print '大変良いです。';
        break;
    case '乙':
        print '良いです。';
        break;
    case '丙':
        print 'もう少し頑張りましょう。';
        break;
    default :
        print '???';
        break;
}  // 結果：大変良いです。
?>