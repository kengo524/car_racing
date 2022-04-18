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

        //リフトアップした場合
        function liftUp($up_count){
            echo "※リフトアップ実行";
            echo "<br />";
            if($up_count<5){
              for($i = 0; $i<$up_count; $i++){
                $this->height += 40;
                $this->acceleration *= 0.8;
              }
            }elseif($up_count>=5){
              echo "これ以上リフトアップできません";
            }elseif($up_count<1){
              echo "正しい値を入力ください";
            }
            
        }

        //リフトダウンした場合
        function liftDown($down_count){
          echo "※リフトダウン実行";
          echo "<br />";
          if($down_count<5){
          $this->height -= 40;
          $this->acceleration /= 0.8;
          }elseif ($down_count>=5) {
            echo "これ以上リフトダウンできません";
          }elseif($up_count<1){
            echo "正しい値を入力ください";
          }
        }
    }
?>