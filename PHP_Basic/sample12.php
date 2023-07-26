<?php
/**変数のスコープ
 * 変数の有効範囲
 * グローバルスコープ：どこからでもアクセスできる
 * ローカルスコープ：関数の中で定義された変数
 * スーパーグローバルスコープ：どこからでもアクセスできるが、関数の中では使えない
 */

//グローバルスコープ
$global = 'グローバル';
function checkScope() {
    //ローカルスコープ
    $local = 'ローカル';
    echo $local;
    echo '<br>';
    //グローバルスコープの変数を使う
    //ほぼ使わない
    echo $global; //エラー
    echo '<br>';
    global $global;//グローバルスコープの変数を使う
    echo $global;//グローバル
    echo '<br>';
    
}
checkScope();//ローカル グローバル

//関数のデフォルト引数としてぐろーばるスコープの変数を使う
$global = 'グローバル';
function checkScope2($local = 'ローカル') {
    echo $local;
    echo '<br>';
    //グローバルスコープの変数を使う
    echo $global; //エラー
    echo '<br>';
    global $global;//グローバルスコープの変数を使う
    echo $global;//グローバル
    echo '<br>';
    
}
checkScope2();//ローカル グローバル



//ローカルスコープの変数を使う
//echo $local;//エラー

//スーパーグローバルスコープ
//PHPに元から用意されている変数
//var_dump($_GET);
//var_dump($_POST);
//var_dump($_SERVER);
//var_dump($_SESSION);
//var_dump($_COOKIE);
//var_dump($_FILES);
//var_dump($_ENV);
//var_dump($GLOBALS);

/**使用用途
 * $_GET：URLパラメータを取得する
 * $_POST：フォームから送信されたデータを取得する
 * $_SERVER：サーバーの情報を取得する
 * $_SESSION：セッションを使う
 * $_COOKIE：クッキーを使う
 * $_FILES：ファイルアップロードを使う
 * $_ENV：環境変数を使う
 * $GLOBALS：グローバルスコープの変数を使う
 */