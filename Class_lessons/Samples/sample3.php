<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo 'PHPでの時間表示';
    echo '<br><br>';
    date_default_timezone_set('Asia/Tokyo'); //時間お表記設定
    echo '現在は'. date('Y年m月d日 H時i分s秒');
    ?>
</body>
</html>