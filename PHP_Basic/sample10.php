<?php
/**関数の考え方
 * 何度も使う処理をまとめておく
 * 使い回すことができる
 * 入力(引数)と出力(戻り値)がある
 * 組み込み関数：PHPが最初から用意している関数
 * ユーザー定義関数：自分で作成する関数
 */


//組み込み関数
//公式マニュアル：https://www.php.net/manual/ja/funcref.php

//文字列の長さを取得する
//strlen(文字列);
//マルチバイト文字列の場合、日本語は1文字3バイトとしてカウントされる
//mb_strlen(文字列);
echo strlen('あいうえお');//15
echo '<br>';
echo md_strlen('あいうえお');//5
echo '<br>';

//文字列を置換する
//str_replace(置換前, 置換後, 対象の文字列);
echo str_replace('い', 'お', 'あいうえお');//あおうえお
echo '<br>';

//指定した文字列で分割する
//explode(区切り文字, 対象の文字列);
$fruits = 'りんご,バナナ,ぶどう';
$fruits = explode(',', $fruits);
var_dump($fruits);//array(3) { [0]=> string(9) "りんご" [1]=> string(9) "バナナ" [2]=> string(9) "ぶどう" }
echo '<br>';

//配列を指定した文字列で連結する
//implode(区切り文字, 配列);
$fruits = implode(',', $fruits);
var_dump($fruits);//string(27) "りんご,バナナ,ぶどう"
echo '<br>';

//指定した文字列を含むかどうか
//in_array(検索する文字列, 配列);
var_dump(in_array('りんご', $fruits));//bool(true)
echo '<br>';

//指定した文字列を検索する
//strpos(対象の文字列, 検索する文字列);
echo strpos('abcde', 'cd');//2
echo '<br>';


//文字列を切り取る
//mb_substr(対象の文字列, 切り取る開始位置, 切り取る長さ);
echo mb_substr('あいうえお', 2, 2);//うえ
echo '<br>';


//正規表現
//使い所
//メールアドレスの形式チェック
//郵便番号の形式チェック
//電話番号の形式チェック
//URLの形式チェック
//preg_match(正規表現, 対象の文字列);
$http_response_header = 'HTTP/1.1 200 OK';
if (preg_match('/^HTTP\/\d\.\d\s(\d+)\s(.+)/', $http_response_header, $matches)) {
    var_dump($matches);
}
//array(3) { [0]=> string(15) "HTTP/1.1 200 OK" [1]=> string(3) "200" [2]=> string(2) "OK" }
echo '<br>';


