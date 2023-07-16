<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <input name='username' placeholder="usernameを入力してください">
        <input name='password' type='password' placeholder="passwordを入力してください">
        <input type='submit' value='Submit'>
    </form>
<?php
if (isset($_POST['username'])) {
    try{
        $db = new mysqli('localhost:8889', 'root', 'root', 'mydb');
        if($db->connect_error){
            throw new Exception('データベースの接続に失敗しました');
        }
        echo 'DBに接続しました。';
        
        $stmt = $db->prepare('SELECT * FROM User WHERE username = ?');
        $username = htmlspecialchars($_POST['username']);
        $stmt->bind_param('s', $username);

        $stmt->execute();

        $result = $stmt->get_result()->fetch_assoc();

        if (password_verify($_POST['password'], $result['password'])) {
            session_start();
            $_SESSION['user_session'] = $result['session'];
            echo "ログイン認証に成功しました<br>";
            echo "<a href=\"check-login.php\">確認する</a>";
        } else {
            echo "ログイン認証に失敗しました";
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