<?php
    // cars.phpを読み込む
    require_once 'cars.php';
    
    class Honda extends Cars{  // cars.phpのクラスを継承
        function __construct(
            $names = "honda",
            $prices = 2000,
            $members_capacity = 5, 
            $members = 1,
            $velocity = 0,
            $max_velocity = 180,
            $acceleration = 30,
            $deceleration = 40,
            $height = 120,
          ){
            $prices = mt_rand(($prices-249), ($prices + 249));
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