<?php
// usage: php weather_jp.php 東京都
// 注意：APIキーは空文字で共有し、各自で設定すること
$APPID = 'f3bb2987284c3f5ddf883f4f95eb333d'; // ← ここに自分のAPIキーを設定

if ($argc < 2) {
    fwrite(STDERR, "使い方: php {$argv[0]} <都道府県(漢字)>\n");
    exit(1);
}

$input = trim($argv[1]);

// 県庁所在地（代表都市）フォールバック表（簡易）。必要に応じて更新してください。
$fallbackCity = [
    '北海道' => '札幌',      '青森県' => '青森',      '岩手県' => '盛岡',      '宮城県' => '仙台',
    '秋田県' => '秋田',      '山形県' => '山形',      '福島県' => '福島',      '茨城県' => '水戸',
    '栃木県' => '宇都宮',    '群馬県' => '前橋',      '埼玉県' => 'さいたま',  '千葉県' => '千葉',
    '東京都' => '東京',      '神奈川県' => '横浜',    '新潟県' => '新潟',      '富山県' => '富山',
    '石川県' => '金沢',      '福井県' => '福井',      '山梨県' => '甲府',      '長野県' => '長野',
    '岐阜県' => '岐阜',      '静岡県' => '静岡',      '愛知県' => '名古屋',    '三重県' => '津',
    '滋賀県' => '大津',      '京都府' => '京都',      '大阪府' => '大阪',      '兵庫県' => '神戸',
    '奈良県' => '奈良',      '和歌山県' => '和歌山',  '鳥取県' => '鳥取',      '島根県' => '松江',
    '岡山県' => '岡山',      '広島県' => '広島',      '山口県' => '山口',      '徳島県' => '徳島',
    '香川県' => '高松',      '愛媛県' => '松山',      '高知県' => '高知',      '福岡県' => '福岡',
    '佐賀県' => '佐賀',      '長崎県' => '長崎',      '熊本県' => '熊本',      '大分県' => '大分',
    '宮崎県' => '宮崎',      '鹿児島県' => '鹿児島',  '沖縄県' => '那覇',
];

function http_get_json(string $url, int $retries = 3): array {
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_CONNECTTIMEOUT => 5,
        CURLOPT_TIMEOUT => 10,
        CURLOPT_USERAGENT => 'php-openweather-cli/1.0',
    ]);
    $res = curl_exec($ch);
    $err = curl_error($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($res === false) {
        throw new RuntimeException("HTTPエラー: {$err}");
    }

    // レート制限（429）の場合は少し待って再試行
    if ($code == 429 && $retries > 0) {
        usleep(500_000); // 0.5秒待機（必要に応じて調整）
        return http_get_json($url, $retries - 1);
    }

    if ($code < 200 || $code >= 300) {
        throw new RuntimeException("HTTPステータス異常: {$code}");
    }

    $json = json_decode($res, true);
    if (!is_array($json)) {
        throw new RuntimeException("JSON解析に失敗");
    }
    return $json;
}

// 日本語出力用
function weather_desc(string $owmMain, ?string $owmDescJa): string {
    // OpenWeatherMapは lang=ja を付けると日本語の詳細説明(description)が返る
    // main(英語)より、返ってきた日本語descriptionを優先採用
    return $owmDescJa ?: $owmMain;
}

function fetch_weather_by_q(string $name, string $appid): ?array {
    $q = urlencode($name);
    $url = "https://api.openweathermap.org/data/2.5/weather?q={$q},jp&appid={$appid}&units=metric&lang=ja";
    try {
        return http_get_json($url);
    } catch (Throwable $e) {
        return null;
    }
}

if ($APPID === '') {
    fwrite(STDERR, "[注意] APPID(APIキー)が設定されていません。\n");
    exit(1);
}

// 1) まずは都道府県名そのままで試す
$data = fetch_weather_by_q($input, $APPID);

// 2) 失敗したら県庁所在地で再試行
if ($data === null) {
    if (!isset($fallbackCity[$input])) {
        fwrite(STDERR, "[エラー] 未対応の都道府県です: {$input}\n");
        exit(1);
    }
    $data = fetch_weather_by_q($fallbackCity[$input], $APPID);
}

// それでもダメならエラー
if ($data === null || !isset($data['weather'][0])) {
    fwrite(STDERR, "[エラー] 天気情報を取得できませんでした。\n");
    exit(1);
}

// メッセージ生成
$desc = weather_desc($data['weather'][0]['main'] ?? '', $data['weather'][0]['description'] ?? null);
echo "{$input}の現在の天気は、{$desc}です。\n";
?>