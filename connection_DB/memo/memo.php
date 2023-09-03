<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once("dbconnect.php");
    $stmt = $db->prepare("select * from memos where id=?");
    if (!$stmt):
        die($db->error);
    endif;

    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
    // 不正なidの処理
    if (!$id){
        echo "不正なIDです";
        exit();
    }
        
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $stmt->bind_result($id, $memo, $created);
    $result = $stmt->fetch();
    //メモが見つからなかった場合の処理
    if (!$result){
        echo "メモが見つかりませんでした";
        exit();
    }   
    ?>  

    <article>
        <pre><?php echo htmlspecialchars($memo); ?></pre>
        <a href="update.php?id=<?php echo $id; ?>">編集する</a>
        |
        <a href="delete.php?id=<?php echo $id; ?>">削除する</a>
        |
        <a href="index.php">戻る</a>
</body>
</html>