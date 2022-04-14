<?php
  // cars.phpを読み込む
    require 'cars.php';

    class Nissan extends Cars{  // cars.phpのクラスを継承
        
        public $names = "Nissan";
        public $members_capacity = "4";
        public $members = "1";
        public $prices = "1500";
        public $acceleration = "30";
        public $deceleration = "40";
        public $velocity = "0";
        public $max_velocity = "300";
        public $height = "135";
    }
?>