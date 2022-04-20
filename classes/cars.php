<?php
    abstract class Cars{
        public string $names;
        public int $prices;
        public int $members_capacity;
        public int $members;
        public float $velocity;
        public float $max_velocity;
        public float $acceleration;
        public float $deceleration;
        public int $height;

        function __construct(
        $names,
        $prices,
        $members_capacity,
        $members,
        $velocity,
        $max_velocity,
        $acceleration,
        $deceleration,
        $height
        ){
        $this->names = $names;
        $this->prices = $prices;
        $this->members_capacity = $members_capacity;
        $this->members = $members;
        $this->velocity = $velocity;
        $this->max_velocity = $max_velocity;
        $this->acceleration = $acceleration;
        $this->deceleration = $deceleration;
        $this->height = $height;
        }

        /*データ取得*/ 
        public function getNames(){
            return $this->names;
        }
        public function getPrices(){
            return $this->prices;
        }
        public function getVelocity(){
            return $this->velocity;
        }
        public function getMembers(){
            return $this->members;
          }
      
        public function getMembersCapacity(){
            return $this->members_capacity;
          }
      
        public function getAcceleration(){
            return $this->acceleration;
          }

        public function getDeceleration(){
        return $this->deceleration;
        }
        
        public function getVelocity_Mps(){
            return round(($this->velocity)*1000/3600,2);//時速→秒速に変換
        }  

        /*アクセルを踏む関数 */
        function pushAccel($time_interval){
            $this->velocity += $time_interval*$this->getAcceleration();
            // $this->velocity_mps = $this->kmphToMps();//時速→秒速に変換
            // $this->velocity_mps = $this->velocity_mps+$time_interval*$this->getAcceleration();//速度（秒速）＋加速度（m/s^2）=現在速度（秒速） 
            if($this->velocity > $this->max_velocity){//秒速ベースで最高速度を超えた場合
               $this->velocity = $this->max_velocity;//最高速度（秒速ベース）とする。
            } 
            // $this->velocity = round($this->velocity_mps)*3600/1000;
            // return($this->velocity_mps);
            // return($this->velocity);
        }

        /*ブレーキを踏む関数 */
        function pushBreak($time_interval){
            $this->velocity -= $time_interval*$this->getDeceleration();
            // $this->velocity_mps = round(($this->velocity)*1000/3600,2);//時速→秒速に変換
            // $this->velocity_mps = $this->velocity_mps-$time_interval*$this->deceleration;//速度（秒速）-加速度（m/s^2）=現在速度（秒速）
            if($this->getVelocity_Mps() < 0){
                $this->velocity = 1;
            }
        }

        /*乗車*/
        function getOn($add_members){
            $this->members += $add_members;
            if($this->members_capacity < $this->members){
                $this->members = $this->members_capacity;
                echo "定員です。これ以上乗れません。";
                echo "<br />";
                return;
            }else{
                for ($i = 0; $i<$add_members; $i++){
                    $this->acceleration = $this->acceleration*0.95;
                }
                echo "追加で{$add_members}人乗車しました。(現在{$this->members}人乗車中。）";
                echo "<br />";
                echo "現在の加速度：{$this->acceleration}(m/s^2)";
                echo "<br />";
            }
        }

        /*降車*/
        function getOff($decrease_members){
            if($this->members-$decrease_members < 1){
                echo "誰か乗ってください。";
                echo "<br />";
                return;
            }else{
                for ($i = 0; $i<$decrease_members; $i++){
                    $this->acceleration = $this->acceleration/0.95;
                    $this->members -= 1;
                }
                echo "途中で{$decrease_members}人下車しました。(現在{$this->members}人乗車中。）";
                echo "<br />";
                echo "現在の加速度：{$this->acceleration}(m/s^2)";
                echo "<br />";
            }
        }

        /*車の情報表示*/
        function printInformation(){
            echo "車種：{$this->names}\n";
            echo "価格：{$this->prices}万円\n"; 
            echo "定員：{$this->members_capacity}名\n"; 
            echo "加速度：{$this->acceleration}(m/s^2)\n"; 
            echo "減速度：{$this->deceleration}(m/s^2)\n"; 
            echo "最高速度：{$this->max_velocity}km/h\n";
        }

        //統計表示
        static function printStatistics($objects){
            // 合計金額
            $sum_price = array_sum(array_column($objects,'prices'));
            // 合計台数
            $sum_cars = count($objects);
            // 平均金額
            $ave_price = round($sum_price / $sum_cars);
             
            echo "合計金額：{$sum_price}万円";
            echo "<br />"; 
            echo "平均金額：{$ave_price}万円";
            echo "<br />";      
        }
    }
?>