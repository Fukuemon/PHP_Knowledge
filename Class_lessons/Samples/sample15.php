<?php
ini_set("display_errors", "On");
try {
    $db = new PDO('mysql:dbname=mydb;host=localhost;port=8889;charset=utf8', 'root', 'root');
    $stmt = $db->prepare('UPDATE items SET name = :name WHERE id = :id');
    if ($stmt->execute(array(':name' => '編集したデータ', ':id' => 1000))) {
        echo '情報を更新しました。';
    } else {
        print_r($stmt->errorInfo());
        echo '情報を更新に失敗しました。';
    }
} catch (PDOException $e) {
    echo 'DB接続エラー: ' . $e->getMessage();
}
?>