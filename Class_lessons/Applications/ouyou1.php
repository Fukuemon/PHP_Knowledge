<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // 処理内容： 今日から一年後までの日付を出力する
    // 出力例： 5/9(Sun), 5/10(Mon), 5/11(Tue)
    for ($i = 0; $i <= 365; $i++) {
        $timestamp = strtotime('+' . $i . 'day');
        echo date('n/j(D)', $timestamp);
        echo '<br>';
    }
    ?>
</body>
</html>