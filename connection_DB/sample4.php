<!--memoの挿入(validation)-->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $db = new mysqli('localhost:8889', 'root', 'root', 'mydb'); //データベースに接続
    $message = "フォームから入力した値"; //フォームから入力した値
    $stmt = $db->prepare("insert into memos(memo) values(?)"); //データを追加(SQL文)
    if (!$stmt): //SQL文が間違っていたらエラーを表示
        die($db->error);
    endif;
    $stmt->bind_param('s', $message); //チェックしたい値を設定
    $ret = $stmt->execute(); //データを追加
    if ($ret):
        echo 'データを追加しました';
    else:
        echo 'データの追加に失敗しました';
    endif; 
    ?>
</body>
</html>