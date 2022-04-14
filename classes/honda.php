<?php
    // cars.phpを読み込む
    require_once 'cars.php';
    
    class Honda extends Cars{  // cars.phpのクラスを継承
        function __construct($prices=null,$members_capacity=8){
            $this->deceleration = 40;
            if(!$prices){
                $prices = mt_rand(1501,2500);
            }
            $this->initialize("Honda",$prices,$members_capacity,$acceleration=30,120);
        }
    }
?>