<?php 
require_once("dbconnect.php");

$stmt = $db->prepare("update memos set memo=? where id=?");
$id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
$memo = filter_input(INPUT_POST, "memo", FILTER_SANITIZE_SPECIAL_CHARS);
$stmt->bind_param("si", $memo, $id);
$success = $stmt->execute();
if ($success):
    echo "メモの内容を変更しました";
    echo "<br>-> <a href='index.php'>トップへ戻る</a>";
else:
    echo "メモの内容の変更に失敗しました";
    echo "<br>-> <a href='index.php'>トップへ戻る</a>";
endif;
?>
```