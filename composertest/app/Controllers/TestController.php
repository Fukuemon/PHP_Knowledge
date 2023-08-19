<?php

namespace App\Controllers;

use App\Models\TestModel; //TestModelクラスを読み込む

class TestController
{
    public function run()
    {
        $model = new TestModel(); //TestModelクラスのインスタンスを作成
        $text = $model->getText(); //TestModelクラスのgetTextメソッドを実行
        echo $text;
    }
}