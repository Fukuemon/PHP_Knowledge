<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    #　連想配列：keyとvalueで値を関連づけて格納することができる
    $fruits = [
        'apple' => 'りんご',
        'lemon' => 'レモン',
        'grape' => 'ぶどう',
        'tomato' => 'トマト',
    ];

    # foreach：配列の中身がなくなるまで処理を繰り返す
    foreach ($fruits as $english => $japanese) {
        echo "英語：" . $english . "<br>";
        echo "日本語：" . $japanese . "<br>";
    }
    ?>
</body>
</html>