<?php
require("dbconnect.php");

$stmt = $db->prepare("delete from memos where id=?");
if (!$stmt):
    die($db->error);
endif;
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
if (!$id):
    echo "不正なIDです";
    exit();
endif;
$stmt->bind_param("i", $id);
$success = $stmt->execute();
if ($success):
    echo "メモの内容を削除しました";
    echo "<br>-> <a href='index.php'>トップへ戻る</a>";
else:
    echo "メモの内容の削除に失敗しました";
endif;

header("Location: index.php");
?>