<?php
require '../vendor/autoload.php';

$cli = new GuzzleHttp\Client([
    'base_uri' => 'https://wings.msn.to',
]);

$res = $cli->get('/tmp/books.json');
$obj = json_decode($res->getBody());
$obj_2 = json_decode($res->getBody(), true);
print_r($obj);
print_r($obj_2);

// タイトルにアクセスすなら
print($obj->books[0]->title) . PHP_EOL;   // 結果：独習Java 新版
print $obj_2['books'][0]['title'];  // 結果：独習Java 新版
?>