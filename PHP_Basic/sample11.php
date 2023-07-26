<?php
/**ユーザー定義関数
 * camelCase
 * 先頭は小文字
 * 2つ目以降の単語の先頭は大文字
 * snakeCase
 * 全て小文字
 * 単語の間は_でつなぐ
 * どっちが使われるか
 * camelCaseが多い
 */

/**関数の定義
 * function 関数名(引数1, 引数2, ...) {
 *  処理;
 * }
 */

//関数の呼び出し
//関数名(引数1, 引数2, ...);

/**引数と戻り値
 * 引数：関数に渡す値
 * 戻り値：関数から返ってくる値
*/

//引数と戻り値がない関数
function hello(){
    echo 'Hello';
}
hello();//Hello

//引数がある関数
function sayHello($name){
    echo 'Hello' . $name;
}
sayHello('Tom');//HelloTom

//戻り値がある関数
function getHello($name){
    return 'Hello' . $name;
}
echo getHello('Tom');//HelloTom

//変数に関数を代入する
$func = function ($name) {
    echo 'Hi!' . $name;
};
$func('Tom');//Hi!Tom
echo '<br>';

//関数の中で関数を呼び出す
function sayHi3($name) {
    $func = function ($name) {
        return 'Hi!' . $name;
    };
    echo $func($name);
}
sayHi3('Tom');//Hi!Tom
echo '<br>';


/** 関数：checkPostalCode
 * // 引数：郵便番号
 * 戻り値：true/false
 * 郵便番号の形式が正しいかどうかをチェックする関数
 * 例：123-4567
 */

function checkPostalCode($str){
    $replaced = str_replace('-', '', $str);
    $length = strlen($replaced);
    if ($length === 7) {
        return true;
    }
    return false;
}
var_dump(checkPostalCode('123-4567'));//bool(true)
var_dump(checkPostalCode('1234567'));//bool(true)
var_dump(checkPostalCode('123-456'));//bool(false)
var_dump(checkPostalCode('12345678'));//bool(false)
echo '<br>';


