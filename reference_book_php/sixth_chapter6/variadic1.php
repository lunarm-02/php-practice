<?php
// ピリオド３つ付与。渡された任意個数の引数を配列としてまとめて取得
function total(float ...$args) : float {
    // 結果を格納するための変数$result
    $result = 0;
    // 取得した引数を順に加算処理
    foreach($args as $arg) {
        $result += $arg;
    }
    return $result;
}


print total(7, 3, 10); 
 // 結果：20
print total(11, -5, 4, 88); // 結果：98
?>