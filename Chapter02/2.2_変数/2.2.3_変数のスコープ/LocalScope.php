<?php

$foo = 1;

function some_function(){
    $foo = 10;  // ここはローカルスコープ
                // グローバルスコープの $foo を変更したことにはならず、
                // これはローカルスコープで新しい変数を定義したことになる
    $bar = 20;
}

some_function();

echo $foo, PHP_EOL; // 1
echo $bar, PHP_EOL; // Notice: Undefined variable: bar
                    // 関数のローカルスコープで定義された変数はグローバルスコープでは未定義となる