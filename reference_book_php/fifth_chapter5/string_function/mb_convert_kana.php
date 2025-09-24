<?php // 文字列を変換するmb_convert_kana関数
// エンドユーザから入力された値に「ゆらぎ」があった場合でも、この関数を利用することで表記をそろえることができる。
// mb_convert_kana(string $string [, string $mode = "KV" [, ?string $encoding]]) : string
// string : 任意の文字列
// $mode : 変換オプション
// $encoding : 使用する文字エンコーディング（省略時はdefault_chasetパラメーターの値）

// 入力機能や検索フォームなどで役立つ。データベース保存前でも入力値を統一できる

$str = 'WINGSproject';
print mb_convert_kana($str, 'RKV');  // 結果：WINGSプロジェクト
?>