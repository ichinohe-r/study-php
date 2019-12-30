<?php
$array = array(1, 2, 3, 4, 5,); // $array はすべてのグローバルスコープからアクセス可能
foreach ($array as $i) {    // foreach 構文で配列を走査
    echo $i, PHP_EOL;
}
echo "Last: ", $i, PHP_EOL; // foreach 構文を抜けた後でも $i は使える