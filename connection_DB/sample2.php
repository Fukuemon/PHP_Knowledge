<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $db = new mysqli('localhost:8889', 'root', 'root', 'mydb');
    $records =$db->query("select * from my_items"); //my_itemsの中身を取得
    if ($records) { //中身があるなら(falseでなければ)
        while ($record = $records->fetch_assoc()) { //連想配列として、データを一件record変数に渡す
            echo $record['item_name'] . ', ' . $record['price'] . '<br>';  
        }
    }
    var_dump($records); //変数の内容を表示
    ?>
</body>
</html>