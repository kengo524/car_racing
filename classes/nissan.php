<?php
  // cars.phpを読み込む
  require_once 'cars.php';

  class Nissan extends Cars{  // cars.phpのクラスを継承
    function __construct(
      $names = "Nissan",
      $prices = 1501,
      $members_capacity = 3, 
      $members = 1,
      $velocity = 0,
      $max_velocity = 140,
      $acceleration = 30,
      $deceleration = 40,
      $height = 150,
    ){
      parent::__construct(
        $names,
        $prices,
        $members_capacity,
        $members,
        $velocity,
        $max_velocity,
        $acceleration * 0.6,
        $deceleration,
        $height
      );
    }
    

    //ニッサンの欠陥発覚
    // echo "欠陥発覚前の加速度{$acceleration}(m/s^2)";
    // $acceleration *= 0.6;
    // echo "<br />";
    // echo "発覚後の加速度{$this->acceleration}(m/s^2)(60%減)";
  }
?>