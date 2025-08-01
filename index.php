<?php
$name = "ryoga";

// 初期化 html側で格納された変数で判断するため。
$start_year = "";
$end_year = "";
$error_message = "";
$leap_years = [];
$error_messages = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $start_year = $_POST["start_year"];
    $end_year = $_POST["end_year"];

    /* 修正ポイント
    1. 「年」とは、開始年と終了年、どちらのことか
    2. 数値チェックで引っかかったのか、正の整数チェックで引っかかったのか、intのサイズで引っかかったのか、どれなのか
    3. int型のサイズとは何なのか。結局、どう修正すれば良いのか 
    */
    // 数値チェック→intチェック→開始終了チェック→現実的範囲チェック
    if ((!ctype_digit($start_year) || !ctype_digit($end_year))) {
        $error_messages[] = "開始年と終了年には0以上の西暦（数字）を入力してください。（例：2025,2030）";
    } else if ($start_year >= PHP_INT_MAX || $end_year >= PHP_INT_MAX) {
        $error_messages[] = "数値が大きすぎます。（良例：開始年「2025」　終了年「2700」）（NG例：9999999999999999999999）";
    } else if ($start_year > $end_year) {
        $error_messages[] = "開始年は終了年より小さく入力してください。（例：2025, 2026）";
    } else if ($start_year < 0 || $end_year > 3000) {
        $error_messages[] = "0~3000　の間で数値を入力してください。（例：2500, 3000）";
    } else {
        // 条件をすべてパスしたらうるう年を配列に格納
        $start = (int)$start_year;
        $end = (int)$end_year;
        for ($year = $start; $year <= $end; $year++) {
            if (($year % 4 === 0 && $year % 100 !== 0) || ($year % 400 === 0)) {
                $leap_years[] = $year;
            }
        }
    }
}
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>PHPテスト</title>
</head>
<body>
    <h1>こんにちは、<?php echo $name; ?>さん！</h1>
    <form action = "" method = "post">
        <!-- ここはエスケープ処理が必要 -->
        <input type = "text" name = "start_year" placeholder="開始年の入力" value="<?php echo htmlspecialchars($start_year); ?>" />
        <input type = "text" name = "end_year" placeholder="終了年の入力" value="<?php echo htmlspecialchars($end_year); ?>" />
        <input type = "submit" value="送信" /> 
    </form>

    <!-- ここから出力結果の表示 -->
    <?php if ($error_messages): ?>
        <h2 style = "color:red;">以下のエラーが検出されました。↓↓↓</h2>
            <ul>
                <?php foreach ($error_messages as $em): ?>
                    <li><?php echo $em; ?></li>
                <?php endforeach; ?>
            </ul>
    <?php elseif (!empty($leap_years)): ?>
        <h2>「<?php echo $start; ?>年から<?php echo $end; ?>年までの閏年一覧」</h2>
        <ul>
            <?php foreach ($leap_years as $year): ?>
                <li><?php echo $year; ?>年</li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>