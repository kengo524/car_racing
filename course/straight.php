<?php

// roads.phpを読み込む
require_once 'road.php';
    
class Straight extends Road{  // roads.phpのクラスを継承
    function __construct(
        $names = "ストレート",
        $distance = 1000, /*単位m */
        $tolerance_velocity = 300*1000/3600 /*単位秒速〇m */
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

// $straight = new Straight();
// $straight->printRoadInformation();

?>