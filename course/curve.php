<?php

// road.phpを読み込む
require_once 'road.php';
    
class Curve extends Road{  // roads.phpのクラスを継承
    function __construct(
        $names = "カーブ",
        $distance = 300, /*単位m */
        $tolerance_velocity = 130*1000/3600 /*単位秒速〇m */
    ){
        $tolerance_velocity=round($tolerance_velocity,2);
        parent::__construct(
        $names,
        $distance,
        $tolerance_velocity
        );
    }

// for($i=0; $i<; $i++)
// if($this->velocity < $this->max_velocity){
//     function pushAccell()
//  }else($this->velocity > 最高速度){
//     $this->velocity=$this->max_velocity;
// }
}

// $curve = new Curve();
// $curve->printRoadInformation();


?>