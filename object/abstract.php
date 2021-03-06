<?php
//抽象クラス//
abstract class ProductAbstract{
  class BaseProduct{
    public function echoProduct(){
      echo '親クラスです';
    }
    public function getProduct(){
      echo '親の関数です';
    }
  }
}

//具象クラス、親クラス
  class BaseProduct{
    public function echoProduct(){
      echo '親クラスです';
    }
    public function getProduct(){
      echo '親の関数です';
    }
  }
//子クラス
  class Product extends BaseProduct{
    //アクセス修飾子、private(外からアプセスできない),protexted(自分、継承したクラス),public(公開)

    //変数
    private $product=[];


    //関数
    //初回
    function __construct($product){
      $this->product = $product;
    }

    public function getProduct(){
      echo $this->product;
    }

    public function addProduct($item){
      $this->product .=$item;
    }
    public static function getStaticProduct($str){
      echo $str;
    }
  }

  $instance = new Product('テスト');

  var_dump($instance);
  $instance->addProduct('追加分');
  echo '<br>';

  $instance->echoProduct();
  $instance->getProduct();
  echo '<br>';

  //静的（static）
  Product::getStaticProduct('静的');
  echo '<br>';
 ?>
