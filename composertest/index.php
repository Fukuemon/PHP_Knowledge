<?php

require_once __DIR__ . '/vendor/autoload.php'; //composerでインストールしたライブラリを読み込む

use App\Controllers\TestController; //TestControllerクラスを読み込む

$controller = new TestController(); //TestControllerクラスのインスタンスを作成
$controller->run(); //TestControllerクラスのrunメソッドを実行
?>
