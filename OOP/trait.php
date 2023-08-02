<?php
/**trait
 * 複数のクラスでメソッドを共有することができる
 * 複数のトレイトを使うことができる
 * トレイトの中でトレイトを使うことができる
 */

 trait ProductTrait{
     public function getProduct(){
         echo 'プロダクト';
     }
 }  

 trait NewsTrait{
     public function getNews(){
         echo 'ニュース';
     }
 }

 class Product{
     //トレイトを使う
     use ProductTrait;
     use NewsTrait;

     public function getInformation(){
         echo 'クラスです';
     }

     //オーバーライド
     public function getNews(){
         echo 'クラスのニュースです';
     }
 }

 $product = new Product();

 $product->getProduct();
    echo '<br>';
 $product->getNews();
    echo '<br>';
