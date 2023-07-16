<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- formで名前入力 -->
    <form action="sample9.php" method="post"> 
        <label for="name">お名前：</label>
        <input type="text" name = "name" id="name">
        <input type="submit" value="送信">
    </from>

    <!-- formで受け取った値を受け取って表示 -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"]; //nameにformで受け取ったnameを代入
        echo "<p>名前:" . $name . "</p>";
    }
    ?>
</body>
</html>