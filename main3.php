<?php
    // 各クラスを読み込む
    require_once 'classes/honda.php';
    require_once 'classes/nissan.php';
    require_once 'classes/ferrari.php';
    
    $created_cars = [];
    global $honda_num;
    function randomCreateHonda(){
        $res_list = [];
        $honda_num = mt_rand(1,10);
        for($i = 0; $i < $honda_num; $i++){
            $res_list[] = new Honda();
        }
        return $res_list;
    }

    function randomCreateNissan(){
        $res_list = [];
        $nissan_num = mt_rand(1,10);
        for($i = 0; $i < $nissan_num; $i++){
            $res_list[] = new Nissan();
        }
        return $res_list;
    }

    function randomCreateFerrari(){
        $res_list = [];
        $ferrari_num = mt_rand(1,10);
        for($i = 0; $i < $ferrari_num; $i++){
            $res_list[] = new Ferrari();
        }
        return $res_list;
    }

    // 値段取得関数
    function getPrices($car_object){
        return $car_object->getPrices();
    }

    function printStatistics($car_list){
        // 合計金額
        $sum_price = array_sum(array_map('getPrices',$car_list));
        // 合計台数
        $sum_cars = count($car_list);
        // 平均金額
        $ave_price = round($sum_price / $sum_cars);

        echo "合計金額：{$sum_price}万円";
        echo "<br />"; 
        echo "平均金額：{$ave_price}万円";
        echo "<br />";    
    }

    $honda_list = randomCreateHonda();
    $nissan_list = randomCreateNissan();
    $ferrari_list = randomCreateFerrari();

    $created_cars = array_merge($honda_list,$nissan_list,$ferrari_list);

    printStatistics($created_cars);
?>