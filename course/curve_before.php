<?php

// roads.phpを読み込む
require_once 'road.php';
    
class CurveBefore extends Road{  // roads.phpのクラスを継承
    function __construct(
        $names = "カーブ直前",
        $distance = 100, /*単位m */
        $tolerance_velocity = 160*1000/3600 /*単位秒速〇m */
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

// // $curve_before = new CurveBefore();
// $curve_before->printRoadInformation();

?>
