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
    $db->query('create table test(id INT'); //idカラムを持つtestテーブルを作成
    echo "テーブルを作成しました";

    echo 'DBに接続しました'
    ?>
</body>
</html>