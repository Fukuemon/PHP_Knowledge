<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $week = ['日','月','火','水','木','金','土'];
    echo "今日は、" . $week[date('w')] . "曜日です";
    ?>
</body>
</html>