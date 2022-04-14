<?php
  // cars.phpを読み込む
  require_once 'cars.php';

  class Nissan extends Cars{  // cars.phpのクラスを継承
    function __construct($prices=null,$members_capacity=2){
      $this->deceleration = 30;
      $this->members = 1;
      if(!$prices){
          $prices = mt_rand(1000,1500);
      }
      $this->initialize("Nissan",$prices,$members_capacity,$acceleration=20,160); 
      }
    }

    //ニッサンの欠陥発覚
    // echo "欠陥発覚前の加速度{$acceleration}(m/s^2)";
    // $acceleration *= 0.6;
    // echo "<br />";
    // echo "発覚後の加速度{$this->acceleration}(m/s^2)(60%減)";
?>