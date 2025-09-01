<?php
// ?? はnull合体演算子
// $argv[0]は　スクリプトのファイル名
$city = $argv[1] ?? "Tokyo";

// 都市名→緯度経度
// json_decode(..., true)json形式の文字列をphp配列に変換。第二引数は連想配列として返す意味
// file_get_contents(URL)は指定したurlにhttpリクエストを送り、そのレスポンスを文字列として取得する。
$geo = json_decode(file_get_contents("https://geocoding-api.open-meteo.com/v1/search?name=" . urlencode($city) . "&count=1&language=ja"), true);
var_dump($geo);
$lat = $geo["results"][0]["latitude"];
$lon = $geo["results"][0]["longitude"];

// 天気取得
$url = "https://api.open-meteo.com/v1/forecast?latitude=$lat&longitude=$lon&current=temperature_2m,weather_code&timezone=auto";
$data = json_decode(file_get_contents($url), true);

// 表示
echo $city . " の現在の気温: " . $data["current"]["temperature_2m"] . "°C\n";
echo "天気コード: " . $data["current"]["weather_code"] . "\n";
?>