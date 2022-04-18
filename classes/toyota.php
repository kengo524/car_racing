<?php
  // cars.phpを読み込む
  require_once 'cars.php';

  class Toyota extends Cars{  // cars.phpのクラスを継承
    function __construct(
      $names = "Toyota",
      $prices = 2000,
      $members_capacity = 3, 
      $members = 1,
      $velocity = 0,
      $max_velocity = 190,
      $acceleration = 35,
      $deceleration = 40,
      $height = 120,
    ){
      $prices = mt_rand(($prices-500), ($prices + 500));
      $acceleration = round($prices/45,2);/*価格に応じて加速度は変化する比例関係 */
      parent::__construct(
        $names,
        $prices,
        $members_capacity,
        $members,
        $velocity,
        $max_velocity,
        $acceleration,
        $deceleration,
        $height
      );
    }
  }
?>