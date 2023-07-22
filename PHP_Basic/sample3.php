<?php
/**配列
 * 複数のデータをまとめて扱う
 * 配列の中身は、文字列や数値など、何でも入れられる
 * 配列の中身は、何個でも入れられる
 * 配列の中身は、何次元でも入れられる
 */

//配列1行
$array = ['りんご', 'みかん', 'ぶどう']; //配列の定義
echo $array[0]; //りんご
echo '<br>';
echo $array[1]; //みかん
echo '<br>';
echo $array[2]; //ぶどう
echo '<br>';

//中身を全て見たい
var_dump($array); //array(3) { [0]=> string(9) "りんご" [1]=> string(9) "みかん" [2]=> string(9) "ぶどう" }
//もっと見やすくしたい
echo '<pre>';
var_dump($array);
echo '</pre>';


//中身を追加したい
$array[] = 'もも'; //配列の末尾に追加
var_dump($array); //array(4) { [0]=> string(9) "りんご" [1]=> string(9) "みかん" [2]=> string(9) "ぶどう" [3]=> string(9) "もも" }

//多次元
$array02 = [
    ['りんご', 'みかん', 'ぶどう'],
    ['いちご', 'すいか', 'めろん'],
    ['さくらんぼ', 'なし', 'びわ']
];
echo $array02[1][1]; //すいか
echo '<br>';
echo $array02[2][2]; //びわ
echo '<br>';
echo $array02[0][2]; //ぶどう
echo '<br>';

//中身を全て見たい
echo '<pre>';
var_dump($array02); 
echo '</pre>';
