<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="register.php" method="post">
        <input name='username' placeholder="usernameを入力してください">
        <input name='password' type='password' placeholder="passwordを入力してください">
        <input type='submit' value='Register'>
    </form>

<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    try {
        $db = new mysqli('localhost:8889', 'root', 'root', 'mydb');
        if ($db->connect_error) {
            throw new Exception('データベースの接続に失敗しました');
        }
        echo 'DBに接続しました。';

        $stmt = $db->prepare('INSERT INTO User (username, password) VALUES (?, ?)');
        $username = htmlspecialchars($_POST['username']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $stmt->bind_param('ss', $username, $password);

        if ($stmt->execute()) {
            echo "登録成功！";
        } else {
            echo "登録失敗： " . $stmt->error;
        }
    } catch (Exception $e) {
        echo "データベースの接続に失敗しました：";
        echo $e->getMessage();
        die();
    }
}
?>

</body>
</html>