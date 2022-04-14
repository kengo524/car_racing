<?php
    // cars.phpを読み込む
    require_once 'cars.php';

    class Ferrari extends Cars{  // cars.phpのクラスを継承
        function __construct(
            $names = "Ferrari",
            $prices = 3000,
            $members_capacity = 2, 
            $members = 1,
            $velocity = 0,
            $max_velocity = 200,
            $acceleration = 50,
            $deceleration = 60,
            $height = 110,
          ){
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