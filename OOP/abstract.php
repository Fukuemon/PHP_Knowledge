<?php
/**抽象クラス
 * 継承することを前提としたクラス
 * 継承した子クラスはabstractの中のメソッドを必ず作らないといけない
 * abstractをつけたメソッドは中身をかけない
 * つけないものは中身もかける
 */

//抽象クラス ：
abstract class ProductAbstract{
    // 変数 関数
    public function echoProduct(){
        echo '親クラスです';
    }

    //abstract:中身をかけない
    abstract public function getProduct();
}

class Product extends BaseProduct{
    // アクセス修飾子 public(公開) protected(限定公開：自分と継承した) private(非公開：外からアクセスできない)
    // this：このクラスの中のという意味

    private $product = [];

    function __construct($product){ // 初めに実行される
        $this->product = $product;
    }

    // 必ず書く必要がある
    public function getProduct(){
        echo $this->product;
        echo '<br>';
        echo "上書きしています";
    }

    public function addProduct($item){
        $this->product .= $item;
    }

    // static 静的に関数を使う
    public static function getStaticProduct($str){
        echo $str;
    }
}



// 具象クラス・親クラス・基底クラス・スーパークラス
class BaseProduct{
    // 変数 関数
    public function echoProduct(){
        echo '親クラスです';
    }

    // オーバーライド(上書き)
    // 子クラスで上書きする(名前が同じなら小クラスが優先)
    public function getProduct(){
        echo '親の関数です';
    }
}

$instance = new Product('テスト');

$instance->getProduct();
echo '<br>';

$instance->addProduct('追加分');
echo '<br>';

// 静的(static) クラス名::関数名
Product::getStaticProduct('静的');
echo '<br>';