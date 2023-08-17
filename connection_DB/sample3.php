<!--COUNT DBのアイテム数の確認 -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php //データベースに接続
    $db = new mysqli('localhost:8889', 'root', 'root', 'mydb'); 
    $records =$db->query("select count(*) as cnt from my_items"); //my_itemsの数を取得 (as cnt) でカラム名を変更
    if ($records) { //中身があるなら(falseでなければ)
        while ($record = $records->fetch_assoc()) { //連想配列として、データを一件record変数に渡す
            echo $record['count'] . ', ' . $record['price'] . '<br>';  
        }
    }
    var_dump($records); //変数の内容を表示
    ?>
</body>
</html>