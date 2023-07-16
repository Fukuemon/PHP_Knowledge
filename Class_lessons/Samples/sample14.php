<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
try {
    // MySQLデータベースに接続(ホスト名、データベース名、文字エンコーディング、ユーザ名、パスワード)を引数として指定する
    $db = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', 'root');
    // 'items'テーブルから全てのレコードを取得するSQLクエリを実行し、結果を$records変数に格納
    $result = $db->query("INSERT INTO items (id, name) VALUES (1000, '練習でーた')");
    echo 'データを挿入しました';
} catch (PDOException $e) { // データベース操作でエラーが発生した場合に例外がスローされ、ここでキャッチされる
    echo "DB接続エラー: " . $e->getMessage(); // エラーメッセージを出力
}
?>
</body>
</html>