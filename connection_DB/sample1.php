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
    echo 'DBに接続しました'
    ?>
    <h1>mysqli_ドキュメント</h1>
    <a href="https://www.php.net/manual/ja/mysqli.quickstart.connections.php">リンク</a>
</body>
</html>