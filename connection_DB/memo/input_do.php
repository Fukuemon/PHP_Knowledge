<?php
require_once("dbconnect.php");

$memo = filter_input(INPUT_POST, "memo", FILTER_SANITIZE_SPECIAL_CHARS); //filter_input：入力値をフィルタリングする関数
$stmt = $db->prepare("insert into memos(memo) values(?)");
if (!$stmt):
    die($db->error);
endif;
$stmt->bind_param("s", $memo);
$ret = $stmt->execute();

if ($ret):
    echo "メッセージを保存しました";
    echo "<br>-> <a href='index.php'>トップへ戻る</a>";
else:
    echo "メッセージの保存に失敗しました";
endif;
?>