<?php

/**foreach文
 * 複数の値を持つ配列の値を一つずつ取り出す
 * foreach (配列 as 変数) {
 *    処理;
 * }
 */

$array = ['りんご', 'みかん', 'ぶどう'];
foreach ($array as $value) {
    echo $value;
}//りんご みかん ぶどう

//連想配列
$fruits = [
    'apple' => 'りんご',
    'orange' => 'みかん',
    'grape' => 'ぶどう'
];
//連想配列の値を取り出す
foreach ($fruits as $value) {
    echo $value . "<br>";
}//りんご みかん ぶどう



//連想配列のキーと値を取り出す
foreach ($fruits as $key => $value) {
    echo `英語：{$key} <br> 日本語：{$value}` . "<br><br>";
}//英語：apple 日本語：りんご 英語：orange 日本語：みかん 英語：grape 日本語：ぶどう

//多次元連想配列
$fruits = [
    'apple' => [
        'japanese' => 'りんご',
        'color' => '赤色'
    ],
    'orange' => [
        'japanese' => 'みかん',
        'color' => 'オレンジ色'
    ],
    'grape' => [
        'japanese' => 'ぶどう',
        'color' => '紫色'
    ]
];
//多段階連想配列の値を指定して取り出す
foreach ($fruits as $fruit) {
    echo $fruit['japanese'] . "<br>";
}//りんご みかん ぶどう

//多段階配列の下の階層の値を取り出す
foreach ($fruits as $fruit) {
    foreach ($fruit as $value) {
        echo $value . "<br>";
    }
}//りんご 赤色 みかん オレンジ色 ぶどう 紫色    



