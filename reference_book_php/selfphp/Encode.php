<?php

// htmlspecialchars(string $string [, int $flags = ENT_COmPAT [, ?string $encoding [, $double_encode = true ]]]) : string 
// $string : エスケープ対象の文字列
// $flags : エスケープの種類
// $encoding : 使用する文字エンコーディング（既定はdefault_charsetパラメータの値）
// $double_encode : HTMLエンティティ（& xx;）を2重にエスケープするか
function e(string $str, string $charset = 'UTF-8') : string {
    return htmlspecialchars($str, ENT_QUOTES | ENT_HTML5, $charset, false);
}
?>
