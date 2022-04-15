<?php
    // 各クラスを読み込む
    require_once 'classes/honda.php';
    require_once 'classes/nissan.php';
    require_once 'classes/ferrari.php';
    
    $classNames = ["Honda","Nissan","Ferrari"];

    foreach($classNames as $className){
        $prices = [];
        $num = mt_rand(1,100);
        for($i = 0; $i < $num; $i++){
            $objects[] = new $className();
        }  
    }
    $all_objects = array_merge($objects);
    cars::printStatistics($all_objects);

?>