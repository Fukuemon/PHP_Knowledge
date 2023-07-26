<?php
/**連想配列
 * キーと値をセットで管理する
 * キーは文字列
 * 値は文字列や数値など、何でも入れられる
 * 値は何個でも入れられる
 * 値は何次元でも入れられる
 */

//連想配列1行
$array_member = [
    'name' => '本田',
    'height' => 170,
    'hobby' => 'サッカー'
];
echo $array_member['name']; //本田
echo '<br>';
echo $array_member['height']; //170
echo '<br>';
echo $array_member['hobby']; //サッカー
echo '<br>';

//中身を全て見たい
echo '<pre>';
var_dump($array_member);
echo '</pre>';

//中身を追加したい
$array_member['weight'] = 70; //配列の末尾に追加

//多次元(連想配列の中に連想配列)
$array_member02 = [
    '本田' => [
        'height' => 170, //連想配列が入っている
        'hobby' => 'サッカー'
    ],
    '香川' => [
        'height' => 165,
        'hobby' => 'サッカー'
    ]
];
echo $array_member02['本田']['height']; //170
echo '<br>';
echo $array_member02['香川']['height']; //165
echo '<br>';
echo $array_member02['本田']['hobby']; //サッカー
echo '<br>';

//さらに階層を深める
$array_member03 = [
    '1kumi' => [
        '本田' => [
            'height' => 170,
            'hobby' => 'サッカー'
        ],
        '香川' => [
            'height' => 165,
            'hobby' => 'サッカー'
        ]
    ],
    '2kumi' => [
        '長友' => [
            'height' => 160,
            'hobby' => 'サッカー'
        ],
        '乾' => [
            'height' => 168,
            'hobby' => 'サッカー'
        ]
    ]
];

echo $array_member03['1kumi']['本田']['height']; //170
echo '<br>';
echo $array_member03['2kumi']['長友']['height']; //160
echo '<br>';
echo $array_member03['1kumi']['香川']['hobby']; //サッカー
echo '<br>';

//中身を全て見たい
echo '<pre>';
var_dump($array_member03);
echo '</pre>';
?>
