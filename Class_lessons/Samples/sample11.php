<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //phpで画像のアップロードを行い、アップロードされた画像のファイル名、タイプ、サイズと画像自体を表示する
    // 画像がアップロードされているかどうかを判定
    if (isset($_FILES['image'])) {
        echo '<p>ファイル名：' . $_FILES['image']['name'] . '</p>';
        echo '<p>ファイルタイプ：' . $_FILES['image']['type'] . '</p>';
        echo '<p>ファイルサイズ：' . $_FILES['image']['size'] . '</p>';
        // 画像を 'images/' ディレクトリに移動するための新しいファイルパスを作成
        $file_path = './images/' . $_FILES['image']['name'];
        // 画像を移動
        move_uploaded_file($_FILES['image']['tmp_name'], $file_path);
        echo '<img src="'. $file_path. '">';
    } else {
        echo '<p>画像がアップロードされていません</p>';
    }
    ?>
    <form action="sample11.php" method="post" enctype="multipart/form-data">
        <label for="image">画像ファイル：</label>
        <input type="file" name="image" id="image">
        <input type="submit" value="送信">
    </form>

</body>
</html>
