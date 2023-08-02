<?php
/**継承
 * 親クラス・基底クラス・スーパークラス
 * 子クラス・派生クラス・サブクラス
 * final:継承させない
 * オーバーライド：小クラスで上書き
 */

// 親クラス・基底クラス・スーパークラス
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

// 子クラス・派生クラス・サブクラス
class Product extends BaseProduct{

    private $product = [];

    function __construct($product){ // 初めに実行される
        $this->product = $product;
        echo '初期化しました';
        echo '<br>';
        echo $product;
        echo '<br>';
    }

    // 小クラスで上書きしている
    public function getProduct(){
        echo $this->product;
    }

    public function addProduct($item){
        $this->product .= $item; // .= は追加するという意味
    }

    // static 静的に関数を使う
    public static function getStaticProduct($str){
        echo $str;
    }
}

$instance = new Product('テスト'); //ここで__constructが実行される

$instance->getProduct(); //親クラスのメソッドを上書きしている

$instance->addProduct('追加分'); //子クラスのメソッド
echo '<br>';

$instance->getProduct(); 
echo '<br>';

// 静的(static) クラス名::関数名
Product::getStaticProduct('静的');
echo '<br>';

// 親クラスのメソッド
$instance->echoProduct();
echo '<br>';