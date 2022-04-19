<?php

    // require_once "course_layout.php";
    require_once "../classes/honda.php";
    require_once "../classes/nissan.php";
    require_once "../classes/toyota.php";
    require_once "../classes/ferrari.php";

    // コース設置

    //車の生成
    $honda = new Honda();
    $nissan = new Nissan();
    $toyota = new Toyota();
    $ferrari = new Ferrari();

    // function driverAccel(){
    $time_interval = 0.1;
    $honda_distance = 0;
    $ferrari_distance = 0;
    $nissan_distance = 0;
    $toyota_distance = 0;
    // 各車に走行距離という要素を追加
        // $honda = [$honda_distance = 0];
        // $nissan = [$nissan_distance = 0];
        // $ferrari = [$ferrari_distance = 0];
        // $toyota = [$toyota_distance = 0];

    //直進→カーブ直前のブレーキ→カーブを繰り返す
    for($j=0; $j<1; $j++){
        // 直進走行
        for($i=0.1; $i<20; $i=$i+0.1){
            // 0.1秒ごとにアクセル踏んでに進んだ距離
            $honda_distance =  round($honda_distance + $honda->pushAccel(0.1)*$time_interval+(($honda->acceleration)*$time_interval^2)/2);
                echo "【{$i}秒経過時点】\n";
                echo "ホンダ：{$honda_distance}m";
                echo "(速さ：{$honda->velocity}km/h)";
                echo "(加速度：{$honda->acceleration}\n";
            $ferrari_distance =  round($ferrari_distance + $ferrari->pushAccel(0.1)*$time_interval+(($ferrari->acceleration)*$time_interval^2)/2);
                echo "フェラーリ{$ferrari_distance}m";
                echo "(速さ：{$ferrari->velocity}km/h)";
                echo "(加速度：{$ferrari->acceleration}\n";
            $nissan_distance =  round($nissan_distance + $nissan->pushAccel(0.1)*$time_interval+(($nissan->acceleration)*$time_interval^2)/2);
                echo "日産{$nissan_distance}m";
                echo "(速さ：{$nissan->velocity}km/h)";
                echo "(加速度：{$nissan->acceleration}\n";
            $toyota_distance =  round($toyota_distance + $toyota->pushAccel(0.1)*$time_interval+(($toyota->acceleration)*$time_interval^2)/2);
                echo "トヨタ{$toyota_distance}m";  
                echo "(速さ：{$toyota->velocity}km/h)";
                echo "(加速度：{$toyota->acceleration}\n\n";   
                // 結果発表（上記同様、ゴール距離を設定し、それをいずれかの車が突破した時点でループ脱却。そこで突破した車を表示したい。
                if($honda_distance >2000 || $nissan_distance >2000 || $ferrari_distance >2000 || $toyota_distance >2000){
                    sleep(1);
                    echo "レース終了!!\n";
                    echo "優勝は、、、\n";
                $distance_lists = [
                    "Honda" => $honda_distance,
                    "Nissan" => $nissan_distance,
                    "Ferrari"=> $ferrari_distance,
                    "Toyota" => $toyota_distance
                ];
                $max_value = 0;
                $max_key = "";
                foreach ($distance_lists as $key => $value) {
                    if ($value > $max_value) {
                        $max_value = $value;
                        $max_key = $key;
                    }
                }
                sleep(1);
                print_r($max_key);            
                break;
                //  for文の中に入れて、ゴールしたらレースの途中で強制終了。
                }        
        }
        // カーブ突入！！1秒間でブレーキかける力は任意
        for($i=20.1; $i<22; $i=$i+0.1){
            // 減速度を任意に設定。（＝運転手の力量などによって変化するものと仮定。）
            $honda->deceleration = mt_rand(20,40);
            if($honda->velocity > 0){
                $honda_distance =  round($honda_distance + $honda->pushBreak(0.1)*$time_interval+(-($honda->deceleration)*$time_interval^2)/2);
                echo "【{$i}秒経過時点】\n";
                echo "ホンダ：{$honda_distance}m※ブレーキを踏んだ";
                echo "(速さ：{$honda->velocity}km/h)";
                echo "(減速度：{$ferrari->deceleration}\n";
            }else{
                echo "【{$i}秒経過時点】\n";
                echo"ホンダは停止した\n";
            }
            $ferrari->deceleration = mt_rand(60,90);
            if($ferrari->velocity > 0){
                $ferrari_distance =  round($ferrari_distance + $ferrari->pushBreak(0.1)*$time_interval+(($ferrari->acceleration)*$time_interval^2)/2);
                echo "フェラーリ{$ferrari_distance}m※ブレーキを踏んだ";
                echo "(速さ：{$ferrari->velocity}km/h)";
                echo "(減速度：{$ferrari->deceleration}\n";
            }else{
                echo "【{$i}秒経過時点】\n";
                echo"フェラーリは停止した\n";
            }
            $nissan->deceleration = mt_rand(20,40);
            if($nissan->velocity > 0){
                $nissan_distance =  round($nissan_distance + $nissan->pushBreak(0.1)*$time_interval+(($nissan->acceleration)*$time_interval^2)/2);
                echo "日産{$nissan_distance}m※ブレーキを踏んだ";
                echo "(速さ：{$nissan->velocity}km/h)";
                echo "(減速度：{$nissan->deceleration}\n";
            }else{
                echo "【{$i}秒経過時点】\n";
                echo"ニッサンは停止した\n";
            }
            $toyota->deceleration = mt_rand(30,60);
            if($toyota->velocity > 0){
                $toyota_distance =  round($toyota_distance + $toyota->pushBreak(0.1)*$time_interval+(($toyota->acceleration)*$time_interval^2)/2);
                echo "トヨタ{$toyota_distance}m※ブレーキを踏んだ";  
                echo "(速さ：{$toyota->velocity}km/h)";
                echo "(減速度：{$toyota->deceleration}\n\n"; 
            }else{
                echo "【{$i}秒経過時点】\n";
                echo"トヨタは停止した\n\n";
            }
            // 結果発表（上記同様、ゴール距離を設定し、それをいずれかの車が突破した時点でループ脱却。そこで突破した車を表示したい。
            if($honda_distance >2000 || $nissan_distance >2000 || $ferrari_distance >2000 || $toyota_distance >2000){
                sleep(1);
                echo "レース終了!!\n";
                echo "優勝は、、、\n";
            $distance_lists = [
                "Honda" => $honda_distance,
                "Nissan" => $nissan_distance,
                "Ferrari"=> $ferrari_distance,
                "Toyota" => $toyota_distance
            ];
            $max_value = 0;
            $max_key = "";
            foreach ($distance_lists as $key => $value) {
                if ($value > $max_value) {
                    $max_value = $value;
                    $max_key = $key;
                }
            }
            sleep(1);
            print_r($max_key);            
            break;
            //  for文の中に入れて、ゴールしたらレースの途中で強制終了。
            } 

        }
        // カーブ曲がり中（＝減速後の速さで走行。距離＝速さ×時間）
        for($i=22; $i<32; $i=$i+0.1){
            $honda_distance = round($honda_distance + $honda->pushAccel(0.1)*$time_interval);
                echo "【{$i}秒経過時点】\n";
                echo "ホンダ：{$honda_distance}m";
                echo "(速さ：{$honda->velocity}km/h)";
                echo "(加速度：{$honda->acceleration}\n";
            $ferrari_distance =  round($ferrari_distance + $ferrari->pushAccel(0.1)*$time_interval);
                echo "フェラーリ{$ferrari_distance}m";
                echo "(速さ：{$ferrari->velocity}km/h)";
                echo "(加速度：{$ferrari->acceleration}\n";
            $nissan_distance =  round($nissan_distance + $nissan->pushAccel(0.1)*$time_interval);
                echo "日産{$nissan_distance}m";
                echo "(速さ：{$nissan->velocity}km/h)";
                echo "(加速度：{$nissan->acceleration}\n";
            $toyota_distance =  round($toyota_distance + $toyota->pushAccel(0.1)*$time_interval);
                echo "トヨタ{$toyota_distance}m";  
                echo "(速さ：{$toyota->velocity}km/h)";
                echo "(加速度：{$toyota->acceleration}\n\n";   
                //途中経過（いずれかの車が500m突破したら表示。）これだと４台突破ごとに表示されるので、突破した車のみ表示したい。
            //     if($honda_distance >500 || $nissan_distance >500 || $ferrari_distance >500 || $toyota_distance >500){
            //         // sleep(1);
            //         echo "500m通過地点途中経過\n";
            //         echo "1位:\n";
            //         echo "2位:\n";
            //         echo "3位:\n";
            //         echo "4位:\n";
            //         echo "\n";
            //     }
                
            // 結果発表（上記同様、ゴール距離を設定し、それをいずれかの車が突破した時点でループ脱却。そこで突破した車を表示したい。
            if($honda_distance >2000 || $nissan_distance >2000 || $ferrari_distance >2000 || $toyota_distance >2000){
                sleep(1);
                echo "レース終了!!\n";
                echo "優勝は、、、\n";
            $distance_lists = [
                "Honda" => $honda_distance,
                "Nissan" => $nissan_distance,
                "Ferrari"=> $ferrari_distance,
                "Toyota" => $toyota_distance
            ];
            $max_value = 0;
            $max_key = "";
            foreach ($distance_lists as $key => $value) {
                if ($value > $max_value) {
                    $max_value = $value;
                    $max_key = $key;
                }
            }
            sleep(1);
            print_r($max_key);            
            break;
            //  for文の中に入れて、ゴールしたらレースの途中で強制終了。
            } 
        }
    }
?>