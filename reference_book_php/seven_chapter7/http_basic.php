<?php
require '../vendor/autoload.php';


// requestメソッド
// Client::request(string $method [, string $uri [, array $options]]) : ResponseInterface
// $method : Httpメソッド
// $uri : アクセス先のURI
// $optons : 動作オプション

// クライアントを生成
$cli = new GuzzleHttp\Client([
    'base_uri' => 'https://wings.msn.to/',
]);

// リクエストを送信
$res = $cli->request('get', '/tmp/sample.txt');
// 取得したコンテンツを出力
print $res->getbody();
?>