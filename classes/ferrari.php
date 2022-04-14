<?php
    // cars.phpを読み込む
    require_once 'cars.php';

    class Ferrari extends Cars{  // cars.phpのクラスを継承
        function __construct($prices=null,$members_capacity=2){
            $this->height = 1050;
            $this->deceleration = 50;
            if(!$prices){
                $prices = mt_rand(2501,3500);
            }
            $this->initialize("Ferrari",$prices,$members_capacity,$acceleration=35,$max_velocity=180);
        }

        //リフトアップした場合
        function liftUp(){
            echo "※リフトアップ実行";
            echo "<br />";
            $this->height += 40;
            $this->acceleration *= 0.8;
        }

        //リフトダウンした場合
        function liftDown(){
        echo "※リフトダウン実行";
        echo "<br />";
        $this->height -= 40;
        $this->acceleration /= 0.8;
        }
    }
?>