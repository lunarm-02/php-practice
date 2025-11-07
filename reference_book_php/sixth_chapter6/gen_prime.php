<?php
// 素数を求めるジェネレーター関数
function getPrimes() {
    $num = 2;  // 素数の開始値
    // ２から順に素数判定し、素数の場合にだけyield（無限ループ）
    while(true) {
        if (isPrime($num)) { yield $num; }
        $num++;
    }
}

// 引数$valueが素数かどうかを判定
function isPrime(int $value) : bool {
    $prime = true;  // 素数かどうかを表すフラグ
    // 2~sqrt($value)で、$valueを割り切れる（余りが0)のものがあるか
    for ($i = 2; $i <= floor(sqrt($value)); $i++) {
        if ($value % $i === 0) {
            $prime = false;  // 割り切れるものがあれば素数でない
            break;
        }
    }
    return $prime;
}

// 素数を順に出力
foreach(getPrimes() as $prime) {
    // 素数が１０１以上になったら終了（これがないと無限ループになるので注意）
    if ($prime > 100) {die();}
    print $prime . ',';
}  // 結果：2,3,5,7,11,13,17,19,23,29,・・・83, 89, 97,
?>