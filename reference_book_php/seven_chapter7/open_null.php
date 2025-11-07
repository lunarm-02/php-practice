<?php
$dt = null;
// null安全演算子：オブジェクトが非nullの時だけ、そのメンバーにアクセスしたい（nullの場合はそのままnullを返したい）
print $dt?->format('Y年m月d日 g:i:s');
// 結果：何も表示されない＝エラーにもならない
?>