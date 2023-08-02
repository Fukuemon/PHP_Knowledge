<?php
/** クラスとインスタンス
 * クラス：設計図
 * インスタンス：実際に作られたもの(クラスを実体化したもの)
 * アクセス修飾子 public(公開) protected(限定公開：自分と継承した) private(非公開：外からアクセスできない)
 * this：このクラスの中のという意味
 * __construct：初めに実行される
 */

//クラスの定義
class Product{
    // 変数
    private $product = [];

    // 関数
    function __construct($product){ // 初めに実行される
        $this->product = $product;
    }

    public function getProduct(){
        echo $this->product;
    }

    public function addProduct($item){
        $this->product .= $item;
    }

    // static 静的に関数を使う
    public static function getStaticProduct($str){
        echo $str;
    }
}

$instance = new Product('テスト');

$instance->getProduct();
echo '<br>';

$instance->addProduct('追加分');
echo '<br>';

$instance->getProduct();
echo '<br>';

// 静的(static) クラス名::関数名
Product::getStaticProduct('静的');
echo '<br>';

