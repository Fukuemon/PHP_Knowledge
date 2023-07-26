<?php
//forとwhileの違い
//for文は繰り返し回数が決まっている時に使う
//while文は繰り返し回数が決まっていない時に使う

/**for文
 * for (初期値; 条件式; 増減値) {
 *   処理;
 * }
 */ 
for ($i = 0; $i < 10; $i++) {
    echo $i;
}//0123456789

//for文の中で配列を使う
$array = ['りんご', 'みかん', 'ぶどう'];
for ($i = 0; $i < count($array); $i++) {
    echo $array[$i];
}//りんごみかんぶどう

//continue
for ($i = 0; $i < 10; $i++) {
    if ($i === 5) {
        continue;
    }
    echo $i;
}//012346789

//break
for ($i = 0; $i < 10; $i++) {
    if ($i === 5) {
        break;
    }
    echo $i;
}//01234

/**while
 * while (条件式) {
 *  処理;
 * }
 */
$x = 0;
while ($x < 10) {
    echo $x;
    $x++;
}//0123456789

