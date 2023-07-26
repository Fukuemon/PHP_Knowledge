<?php

/** switch文
 * 条件によって処理を分ける
 * if文と同じような処理をする
 * if分の方が使いやすい
 * switch文は条件が多い時に使う
 * caseの後に値を書く
 * break;を書く
 * break;を書かないと処理が続いてしまう
 * default:はどのcaseにも当てはまらない時に処理する
 * 
 * switch (条件) {
 * case 値1:
 *    処理1;
 *   break;
 * case 値2:
 *   処理2;
 *  break;
 * default:
 *  処理3;
 * }
 */


$color = 'red';
switch ($color) {
    case 'red':
        echo '赤色';
        break;
    case 'blue':
        echo '青色';
        break;
    default:
        echo 'その他';
}//赤色

//if文で書くと
if ($color === 'red') {
    echo '赤色';
} elseif ($color === 'blue') {
    echo '青色';
} else {
    echo 'その他';
}//赤色

//数字の場合
$number = 1;
switch ($number) {
    case 1:
        echo 'one';
        break;
    case 2:
        echo 'two';
        break;
    default:
        echo 'その他';
}//one

//switchの場合、型の比較ができない
$number = '1';
switch ($number) {
    case 1:
        echo 'one';
        break;
    case 2:
        echo 'two';
        break;
    default:
        echo 'その他';
}//one

//if文の場合、型の比較ができる
if ($number === 1) {
    echo 'one';
} elseif ($number === 2) {
    echo 'two';
} else {
    echo 'その他';
}//その他
