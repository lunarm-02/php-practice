<?php

function checkScope() : string {
    require_once __DIR__.'/scope_included.php';
    return $scope;
}

print checkScope();  // 結果：アクセスできました。

print $scope;  // 結果：カラ（表示されない）警告が出る