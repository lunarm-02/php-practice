<?php
// 開始年と終了年を入力
echo "開始年を入力：";
$start = trim(fgets(STDIN));

echo "終了年を入力：";
$end = trim(fgets(STDIN)); // これが抜けていた

// 数値チェック
if (!is_numeric($start) || !is_numeric($end)) {
    echo "年は数値で入力してください。\n";
    exit;
}

$start = (int)$start;
$end = (int)$end;

if ($start > $end) {
    echo "error : 開始年は終了年より小さく入力。\n";
    exit;
}

echo "「{$start}年から{$end}年までの閏年一覧」\n"; // セミコロンと改行追加

for ($year = $start; $year <= $end; $year++) {
    if (($year % 4 === 0 && $year % 100 !== 0) || ($year % 400 === 0)) {
        echo "{$year}年\n"; // セミコロン追加
    }
}
?>