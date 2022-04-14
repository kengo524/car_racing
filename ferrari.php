<?php
    // cars.phpを読み込む
    require_once 'cars.php';

    class Ferrari extends Cars{  // cars.phpのクラスを継承

        public $names = "Ferrari";
        public $members_capacity = "2";
        public $members = "1";
        public $prices = "3500";
        public $acceleration = "35";
        public $deceleration = "50";
        public $velocity = "0";
        public $max_velocity = "310";
        public $height = "1250";

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