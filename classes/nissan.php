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
      $max_velocity = 180,
      $acceleration = 45,
      $deceleration = 40,
      $height = 150,
    ){
      $prices = mt_rand(($prices-249), ($prices + 249));  
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
  }
?>