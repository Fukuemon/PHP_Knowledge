<?php
require_once("dbconnect.php");
$stmt = $db->prepare("select * from memos where id=?");
if (!$stmt):
    die($db->error);
endif;
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
$stmt->bind_param("i", $id);
$stmt->execute();

$stmt->bind_result($id, $memo, $created);
$result = $stmt->fetch();
if (!$result){
    echo "メモが見つかりませんでした";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メモの編集</title>
</head>
<body>
    <form action="update_do.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <textarea name="memo" cols="50" rows="10" placeholder="メモを入力してください"><?php echo htmlspecialchars($memo)?></textarea><br>
        <button type="submit">編集する</button>
    
</body>
</html>