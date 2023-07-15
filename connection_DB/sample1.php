<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // myspliというモジュールを使用したDB接続
    $db = new mysqli('localhost:8889', 'root', 'root', 'mydb');
    //$db->query("drop table test"); //指定したテーブル(test)を削除する
    $db->query("drop table if exists test"); //指定したテーブル(test)が存在しているなら、削除する
    $success = $db->query('create table test(id INT)'); //idカラムを持つtestテーブルを作成
    if ($success) {
        echo 'テーブルを削除して、新規作成しました';
    } else {
        echo "SQLが正常に動作しませんでした";
        echo $db->error;
    }

    ?>
</body>
</html>