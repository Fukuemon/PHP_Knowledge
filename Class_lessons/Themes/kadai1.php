<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    # クラスの定義
    class Item {
        public $name;
        public $num;
        public $price;
        public $price_sum;
        public static $items_priceArray = [];

        /**コンストラク(作成した時に実行)
         * インスタンス作成時に名前, 個数, 値段を登録する
         * 登録した個数と値段を元に合計金額を計算し、配列に格納する
         */
        public function __construct($item_name, $item_num, $item_price) {
            $this->name = $item_name;
            $this->num = $item_num;
            $this->price = $item_price;
            $this->price_sum = $this->num * $this->price;
            self::$items_priceArray[] = $this->price_sum;
        }

    }

    #インスタンスの生成
    $item1 = new Item("りんご", 2, 100);
    $item2 = new Item("お肉", 1, 1000);
    $item3 = new Item("卵", 2, 200);
    $priceArray = Item::$items_priceArray; # クラスプロパティの配列をローカルの配列に置き換える
    $items_price_sum = array_sum($priceArray); #合計金額(税抜)
    ?>

    <table>
        <tr>
            <th>購入商品</th>
            <th>個数</th>
            <th>料金</th>
        </tr>
        <tr>
            <td><?php echo $item1->name?></td>
            <td><?php echo $item1->num?></td>
            <td><?php echo $item1->price?></td>
        </tr>
        <tr>
            <td><?php echo $item2->name?></td>
            <td><?php echo $item2->num?></td>
            <td><?php echo $item2->price?></td>
        </tr>
        <tr>
            <td><?php echo $item3->name?></td>
            <td><?php echo $item3->num?></td>
            <td><?php echo $item3->price?></td>
        </tr>
    </table>

    <div>
        <h1><?php echo "合計金額(税抜):" . $items_price_sum?></h1>
        <h1><?php echo "合計金額(税込):" . $items_price_sum * 1.08 ?></h1>
    </div>
</body>
</html>