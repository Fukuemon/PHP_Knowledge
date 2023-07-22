<?php
//演算子
$x = 10 % 3; //1
$y = 30.2 / 4; //7.55
var_dump($x);

//%の使い所
$test1 = 7;
$test2 = 3;

$z = 5;
$z %= 2; //1
var_dump($z);


//単項演算子
$z = 5;
$z++; //6
var_dump($z);

//論理演算子
/**
 * < 未満
 * > より大きい
 * <= 以下
 * >= 以上
 * == 等しい
 * != 等しくない
 * === 型も等しい
 * !== 型も等しくない
 * && かつ
 * || または
 */

$a = 3;
$b = 7;
$c = 2;
$d = 9;
var_dump($a < $b); //true
var_dump($a > $b); //false
var_dump($a <= $b); //true
var_dump($a >= $b); //false
var_dump($a == $b); //false
var_dump($a != $b); //true
var_dump($c < $d && $c < $b); //true
var_dump($c < $d && $c > $b); //false
var_dump($c < $d || $c < $b); //true
var_dump($c < $d || $c > $b); //true
var_dump($c > $d || $c > $b); //false
var_dump($c > $d || $c < $b); //false
var_dump($c > $d || $c > $b || $c < $a); //false
var_dump($c > $d || $c > $b || $c > $a); //false
var_dump($c > $d || $c < $b || $c > $a); //false
var_dump($c > $d || $c < $b || $c < $a); //true
var_dump($c < $d || $c > $b || $c < $a); //true
var_dump($c < $d || $c < $b || $c < $a); //true
var_dump($c < $d || $c < $b || $c > $a); //true


//三項演算子
//if文の簡略化
//条件 ? 真 : 偽
$score = 82;
$comment = $score > 80 ? 'good' : 'not good';
var_dump($comment); //good

