<?php
// エラー制御演算子
$data = ['apple' => 'りんご'];
//print $data['orange']; // 結果：warning: Undefined array key "orange" in ~

print @$data["orange"]; // 結果：（表示されない）
