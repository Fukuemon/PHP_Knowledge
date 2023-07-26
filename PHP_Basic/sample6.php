<?php
/**条件分岐
 * if文
 * switch文
 * while文
 * for文
 * foreach文
 */

/**if文
 * elseやelseifはあまり使わないようにする
 * if (条件) {
 *    条件が真の時の処理
 * } else if (条件) {
 *     条件が真の時の処理
 * } else
 *     条件が偽の時の処理
 * }
*/

$x = 90;
if ($x > 80) {
    echo 'great';
} elseif ($x > 60) {
    echo 'good';
} else {
    echo 'so so ...';
}

//==　一致
//=== 型も一致
//!=　一致しない
//!== 型も一致しない
if ($x == 90) {
   echo 'great';
}

/**データが入っているかどうか
 * isset(変数)
 * empty(変数)
 * is_null(変数)
 */

 $test = '1';
    if (isset($test)) {
        echo '変数は存在している';
    }
    
    if (!isset($test)) {
        echo '変数は存在していない';
    }

    if (empty($test)) {
        echo '変数は空です';
    }
    if (!empty($test)) {
        echo '変数は空ではありません';
    }

    if (is_null($test)) {
        echo '変数はnullです';
    }
    if (!is_null($test)) {
        echo '変数はnullではありません';
    }

