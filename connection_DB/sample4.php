<!--memoの挿入-->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php //データベースに接続
    $db = new mysqli('localhost:8889', 'root', 'root', 'mydb'); 
    $ret = $db->query("insert into memos (memo) values ('PHPからのメモです')"); //データを追加
    if ($ret):
        echo 'データを追加しました';
    else:
        echo 'データの追加に失敗しました';
    endif; 
    ?>
</body>
</html>