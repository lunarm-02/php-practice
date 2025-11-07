<?php
function replaceContents(string $path, string ...$args) : string {
    // 指定されたパスからファイルを読み込み
    $data = file_get_contents($path);
    // 可変長引数を順番に処理し、{0}, {1}, .....と置き換え
    for ($i = 0; $i < count($args); $i++) {
        $data = str_replace('{' . ($i) . '}', $args[$i], $data);
    }
    return $data;
}

// data.datを読み込み&出力
echo replaceContents('data.dat', '鈴木太郎', '2021年5月1日');
?>