<?php

    require_once "classes/honda.php";
    require_once "classes/nissan.php";
    require_once "classes/toyota.php";
    require_once "classes/ferrari.php";

    //車の生成
    $honda = new Honda();
    $nissan = new Nissan();
    $toyota = new Toyota();
    $ferrari = new Ferrari();

    //変数定義
    $time_interval = 0.1;
    $honda_distance = 0;
    $ferrari_distance = 0;
    $nissan_distance = 0;
    $toyota_distance = 0;

    //関数まとめる。
    function printRacingData($car, &$distance, $time_interval){
        $distance = round($distance + $car->getVelocity_Mps()*$time_interval);
                    echo "{$car->names}:{$distance}m";
                    echo "(速さ：{$car->velocity}km/h)";
                    echo "(加速度：{$car->acceleration}\n";
                    // usleep(100000);
    }
    
    // 連想配列
    $car_lists = [
        ["車"=> $honda ,"距離" => $honda_distance],
        ["車"=> $ferrari ,"距離" => $ferrari_distance],
        ["車"=> $nissan ,"距離" => $nissan_distance],
        ["車"=> $toyota ,"距離" => $toyota_distance],];
    // print_r($car_lists);

    echo "レーススタート!!"; 
    echo "ゴール距離(2000m)"; 
    sleep(3);
    
    //秒数ごとに車を表示
    for($i=0.1; $i<100; $i=$i+0.1){
        echo "【{$i}秒経過時点】\n";
        foreach($car_lists as &$car_data){
            // print($car_data["車"]->getNames());
            $p = mt_rand(1,100);/*乱数発生させ、確率でブレーキ、アクセル選定 */
            if($p<65){
                $car_data["車"]->pushAccel($time_interval);
            }else if($p<90){
                $car_data["車"]->pushBreak($time_interval);
                echo "ブレーキ踏んだ！";
            }         
            printRacingData($car_data["車"], $car_data["距離"], $time_interval);
            echo "\n";
            // 結果発表（ゴール距離を設定し、それをいずれかの車が突破した時点でループ脱却。そこで突破した車を表示したい。
            if($car_data["距離"] >2000){
                sleep(1);
                echo "レース終了!!\n";
            // $distance_lists = [];
            // foreach($car_lists as $car_data){
            //     $distance_lists[] = [$car_data["車"]-> => $car_data["距離"]];
            // }
            $distance_lists = [
                $car_lists[0]["車"]->getNames() => $car_lists[0]["距離"],
                $car_lists[1]["車"]->getNames() => $car_lists[1]["距離"],
                $car_lists[2]["車"]->getNames() => $car_lists[2]["距離"],
                $car_lists[3]["車"]->getNames() => $car_lists[3]["距離"],
            ];
            $rank = 1;
            arsort($distance_lists);
            foreach ($distance_lists as $key => $value) {
                echo "第".$rank."位".$key;
                echo "\n";
                sleep(1);
                $rank++;
            }
            sleep(1);           
            break 2;
            //  for文の中に入れて、ゴールしたらレースの途中で強制終了。
            } 
        }
    } 
    
    // for($j=0; $j<1; $j++){
    //     // 直進走行
    //     for($i=0.1; $i<20; $i=$i+0.1){
    //         // 0.1秒ごとにアクセル踏んでに進んだ距離
    //         echo "【{$i}秒経過時点】\n";
    //         $honda->pushAccel($time_interval);
    //         printRacingData($honda, $honda_distance, $time_interval);
    //         // $honda_distance = round($honda_distance + $honda->pushAccel(0.1)*$time_interval+(($honda->acceleration)*$time_interval^2)/2);
    //         //     echo "ホンダ：{$honda_distance}m";
    //         //     echo "(速さ：{$honda->velocity}km/h)";
    //         //     echo "(加速度：{$honda->acceleration}\n";
    //         $ferrari->pushAccel($time_interval);
    //         printRacingData($ferrari, $ferrari_distance, $time_interval);
    //         // $ferrari_distance =  round($ferrari_distance + $ferrari->pushAccel(0.1)*$time_interval+(($ferrari->acceleration)*$time_interval^2)/2);
    //         //     echo "フェラーリ{$ferrari_distance}m";
    //         //     echo "(速さ：{$ferrari->velocity}km/h)";
    //         //     echo "(加速度：{$ferrari->acceleration}\n";
    //         printRacingData($nissan, $nissan_distance, $time_interval);
    //         // $nissan_distance =  round($nissan_distance + $nissan->pushAccel(0.1)*$time_interval+(($nissan->acceleration)*$time_interval^2)/2);
    //         //     echo "日産{$nissan_distance}m";
    //         //     echo "(速さ：{$nissan->velocity}km/h)";
    //         //     echo "(加速度：{$nissan->acceleration}\n";
    //         printRacingData($toyota, $toyota_distance, $time_interval);
    //         // $toyota_distance =  round($toyota_distance + $toyota->pushAccel(0.1)*$time_interval+(($toyota->acceleration)*$time_interval^2)/2);
    //         //     echo "トヨタ{$toyota_distance}m";  
    //         //     echo "(速さ：{$toyota->velocity}km/h)";
    //         //     echo "(加速度：{$toyota->acceleration}\n";
    //         echo "\n"; 
    //         usleep(100000);  
    //             // 結果発表（ゴール距離を設定し、それをいずれかの車が突破した時点でループ脱却。そこで突破した車を表示したい。
    //             if($honda_distance >2000 || $nissan_distance >2000 || $ferrari_distance >2000 || $toyota_distance >2000){
    //                 sleep(1);
    //                 echo "レース終了!!\n";
    //             $distance_lists = [
    //                 "Honda" => $honda_distance,
    //                 "Nissan" => $nissan_distance,
    //                 "Ferrari"=> $ferrari_distance,
    //                 "Toyota" => $toyota_distance
    //             ];
    //             $max_value = 0;
    //             $min_value = 10000000000;
    //             $max_key = "";
                
    //             $rank = 1;
    //             arsort($distance_lists);
    //             foreach ($distance_lists as $key => $value) {
    //                 echo "第".$rank."位".$key;
    //                 echo "\n";
    //                 sleep(1);
    //                 $rank++;
    //             }
    //             sleep(1);
    //             print_r($max_key);            
    //             break;//  for文の中に入れて、ゴールしたらレースの途中で強制終了。
    //             }        
    //     }
    //     // ブレーキ！！1秒間でブレーキかける力は任意
    //     for($i=20.1; $i<22; $i=$i+0.1){
    //         // 減速度を任意に設定。（＝運転手の力量などによって変化するものと仮定。）
    //         echo "【{$i}秒経過時点】\n";
    //         $honda->deceleration = mt_rand(20,40);
    //         if($honda->velocity > 0){
    //             $honda_distance =  round($honda_distance + $honda->pushBreak(0.1)*$time_interval+(-($honda->deceleration)*$time_interval^2)/2);
    //             echo "ホンダ：{$honda_distance}m※ブレーキを踏んだ";
    //             echo "(速さ：{$honda->velocity}km/h)";
    //             echo "(減速度：{$ferrari->deceleration}\n";
    //         }else{
    //             echo"ホンダは停止した\n";
    //         }
    //         $ferrari->deceleration = mt_rand(60,90);
    //         if($ferrari->velocity > 0){
    //             $ferrari_distance =  round($ferrari_distance + $ferrari->pushBreak(0.1)*$time_interval+(($ferrari->acceleration)*$time_interval^2)/2);
    //             echo "フェラーリ{$ferrari_distance}m※ブレーキを踏んだ";
    //             echo "(速さ：{$ferrari->velocity}km/h)";
    //             echo "(減速度：{$ferrari->deceleration}\n";
    //         }else{
    //             echo"フェラーリは停止した\n";
    //         }
    //         $nissan->deceleration = mt_rand(20,40);
    //         if($nissan->velocity > 0){
    //             $nissan_distance =  round($nissan_distance + $nissan->pushBreak(0.1)*$time_interval+(($nissan->acceleration)*$time_interval^2)/2);
    //             echo "日産{$nissan_distance}m※ブレーキを踏んだ";
    //             echo "(速さ：{$nissan->velocity}km/h)";
    //             echo "(減速度：{$nissan->deceleration}\n";
    //         }else{
    //             echo"ニッサンは停止した\n";
    //         }
    //         $toyota->deceleration = mt_rand(30,60);
    //         if($toyota->velocity > 0){
    //             $toyota_distance =  round($toyota_distance + $toyota->pushBreak(0.1)*$time_interval+(($toyota->acceleration)*$time_interval^2)/2);
    //             echo "トヨタ{$toyota_distance}m※ブレーキを踏んだ";  
    //             echo "(速さ：{$toyota->velocity}km/h)";
    //             echo "(減速度：{$toyota->deceleration}\n\n"; 
    //             usleep(100000);
    //         }else{
    //             echo"トヨタは停止した\n\n";
    //         }
    //         // 結果発表（ゴール距離を設定し、それをいずれかの車が突破した時点でループ脱却。そこで突破した車を表示したい。
    //         if($honda_distance >2000 || $nissan_distance >2000 || $ferrari_distance >2000 || $toyota_distance >2000){
    //             sleep(1);
    //             echo "レース終了!!\n";
    //         $distance_lists = [
    //             "Honda" => $honda_distance,
    //             "Nissan" => $nissan_distance,
    //             "Ferrari"=> $ferrari_distance,
    //             "Toyota" => $toyota_distance
    //         ];
    //         $max_value = 0;
    //         $max_key = "";
    //         $rank = 1;
    //         arsort($distance_lists);
    //         foreach ($distance_lists as $key => $value) {
    //             echo "第".$rank."位".$key;
    //             echo "\n";
    //             sleep(1);
    //             $rank++;
    //         }
    //         sleep(1);
    //         print_r($max_key);            
    //         break;
    //         //  for文の中に入れて、ゴールしたらレースの途中で強制終了。
    //         } 

    //     }
    //     // 一定走行中（＝減速後の速さで走行。距離＝速さ×時間）
    //     for($i=22; $i<32; $i=$i+0.1){
    //         $honda_distance = round($honda_distance + $honda->pushAccel(0.1)*$time_interval);
    //             echo "【{$i}秒経過時点】\n";
    //             echo "ホンダ：{$honda_distance}m";
    //             echo "(速さ：{$honda->velocity}km/h)";
    //             echo "(加速度：{$honda->acceleration}\n";
    //         $ferrari_distance =  round($ferrari_distance + $ferrari->pushAccel(0.1)*$time_interval);
    //             echo "フェラーリ{$ferrari_distance}m";
    //             echo "(速さ：{$ferrari->velocity}km/h)";
    //             echo "(加速度：{$ferrari->acceleration}\n";
    //         $nissan_distance =  round($nissan_distance + $nissan->pushAccel(0.1)*$time_interval);
    //             echo "日産{$nissan_distance}m";
    //             echo "(速さ：{$nissan->velocity}km/h)";
    //             echo "(加速度：{$nissan->acceleration}\n";
    //         $toyota_distance =  round($toyota_distance + $toyota->pushAccel(0.1)*$time_interval);
    //             echo "トヨタ{$toyota_distance}m";  
    //             echo "(速さ：{$toyota->velocity}km/h)";
    //             echo "(加速度：{$toyota->acceleration}\n\n";
    //             usleep(100000);   
                
    //         // 結果発表（ゴール距離を設定し、それをいずれかの車が突破した時点でループ脱却。そこで突破した車を表示したい。
    //         if($honda_distance >2000 || $nissan_distance >2000 || $ferrari_distance >2000 || $toyota_distance >2000){
    //             sleep(1);
    //             echo "レース終了!!\n";
    //         $distance_lists = [
    //             "Honda" => $honda_distance,
    //             "Nissan" => $nissan_distance,
    //             "Ferrari"=> $ferrari_distance,
    //             "Toyota" => $toyota_distance
    //         ];
    //         $max_value = 0;
    //         $max_key = "";
    //         $rank = 1;
    //         arsort($distance_lists);
    //         foreach ($distance_lists as $key => $value) {
    //             echo "第".$rank."位".$key;
    //             echo "\n";
    //             sleep(1);
    //             $rank++;
    //         }
    //         sleep(1);
    //         print_r($max_key);            
    //         break;
    //         //  for文の中に入れて、ゴールしたらレースの途中で強制終了。
    //         } 
    //     }
    // }
?>