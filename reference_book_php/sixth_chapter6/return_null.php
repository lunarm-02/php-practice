<?php
// 値がないことを明確に意思表示したいので、return null;とするらしい。
// 関数を終了するだけならば、return;のほうが意図が明確
// getValue関数は連想配列から指定されたキーの値を返すための関数
function getValue($map, $key) {
    if (array_key_exists($key, $map)) {
        return $map[$key];
    } else {
        return null;
    }
}
?>