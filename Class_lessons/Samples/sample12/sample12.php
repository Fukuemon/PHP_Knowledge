<?php
session_start(); // セッションを開始する。
session_regenerate_id(); // セッションIDを再生成(セッションハイジャック対策)

$_SESSION['message'] = 'セッションに保存した値' // セッション変数 'message' に文字列 'セッションに保存した値' を設定。session先のページで利用可能となる
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample12</title>
</head>
<body>
    <a href="sample12-2.php">２ページ目へ</a> 
    <!--"sample12-2.php" ページへのリンクを設定。 -->
</body>
</html>