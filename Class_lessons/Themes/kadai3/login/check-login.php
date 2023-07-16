<?php
session_start();

if (isset($_SESSION['user_session'])) {
    echo "ログイン認証に成功しました。<br>";
    echo "ユーザーセッション： " . $_SESSION['user_session'];
} else {
    echo "まだログインしていません。<br>";
    echo "<a href=\"login.php\">ログインする</a>";
}
?>