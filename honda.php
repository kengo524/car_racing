<?php
    // cars.phpを読み込む
    require_once 'cars.php';
    
    class Honda extends Cars{  // cars.phpのクラスを継承

        public $names = "Honda";
        public $members_capacity = "5";
        public $members = "1";
        public $prices = "2500";
        public $acceleration = "30";
        public $deceleration = "40";
        public $velocity = "0";
        public $max_velocity = "300";
        public $height = "1350";
    }
?>