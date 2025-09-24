<?php
// mb_send_mail関数：件名や本文にマルチバイト文字を含んだメールを送信するための関数
// mb_send_mail(string $to, string $subject, sring $message [, string|array $additional_headers [, ?string $additional_params]]) : bool
// $to : 宛先
// $subject : 件名
// $message : 本文
// $additional_headers : メールヘッダー
// $additional_params : その他、メールシステムに渡すパラメーター情報

// メールの構成情報を設定
$to = 'wings@example.com';  // 宛先
$subject = '独習PHP 改定版'; // 件名
$body = "こんにちは、mb_send_mail関数！\nどうですか？";
// 本文
$headers = "From : user01@example.com\n";
$headers .= "Cc : yamada@example.com\n";
$headers .="X-Mailer : PHP 8\n";  // 以上、その他のヘッダー情報
if (mb_send_mail($to, $subject, $body, $headers)) {
    // メール送信
    print 'メール送信に成功しました。';
} else {
    print 'メール送信に失敗しました。';
}

?>