<?php
$memo = filter_input(INPUT_POST, "memo", FILTER_SANITIZE_SPECIAL_CHARS); //filter_input：入力値をフィルタリングする関数
$db = new mysqli("localhost:8889", "root", "root", "mydb");
$stmt = $db->prepare("insert into memos(memo) values(?)");
if (!$stmt):
    die($db->error);
endif;
$stmt->bind_param("s", $memo);
$ret = $stmt->execute();

if ($ret):
    echo "メッセージを保存しました";
else:
    echo "メッセージの保存に失敗しました";
endif;
?>