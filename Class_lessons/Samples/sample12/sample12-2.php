<?php
session_start(); // セッションを開始
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample12-2</title>
</head>
<body>
    セッションの値： <?php echo $_SESSION['message']; ?> 
    <!-- セッション変数 'message' の値を表示(さっきのページで作った値) -->
</body>
</html>
