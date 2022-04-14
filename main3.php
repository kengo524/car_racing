<?php
    // 各クラスを読み込む
    require_once 'classes/honda.php';
    require_once 'classes/nissan.php';
    require_once 'classes/ferrari.php';
    
    function randomCreate(){
        $num = mt_rand(1,100);
        for($i = 0; $i < $num; $i++){
            $honda_list[] = new Honda();
            $nissan_list[] = new Nissan();
            $ferrari_list[] = new Ferrari();
        }
        return $honda_list;
        return $nissan_list;
        return $ferrari_list;
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
        echo "(参考：製造合計台数は{$sum_cars}台）";  
    }

    $honda_list = randomCreate();
    $nissan_list = randomCreate();
    $ferrari_list = randomCreate();

    $created_cars = array_merge($honda_list,$nissan_list,$ferrari_list);

    printStatistics($created_cars);
?>