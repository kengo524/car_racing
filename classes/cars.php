<?php
    class Cars{
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
        $this->prices = mt_rand(($prices-249), ($prices + 249));
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

        /*アクセルを踏む関数 */
        function pushAccel($time_interval){
            $this->velocity += $time_interval*$this->acceleration;  
            return($this->velocity);
        }

        /*ブレーキを踏む関数 */
        function pushBreak($time_interval){
            $this->velocity += $time_interval*$this->deceleration;
            return($this->velocity);
        }

        /*乗車*/
        function getOn(){
            if($this->member_capacity == $this->members){
                echo "定員です。";
                return;
            }
            $this->members += $members;
            for ($i = 0; $i<$members; $i++){
                $this->acceleration = $this->acceleration*(0.95);
              }
              echo "追加で" . $members . "人乗車しました。";
              echo "<br />";
              echo "現在の加速度：{$this->acceleration}(m/s^2)";
        }

        /*降車*/
        function getOff(){
            if($this->members < 1){
                echo "誰か乗ってください。";
                return;
            }
            $this->acceleration /= (1 - $this->members*0.05);
            $this->members -= 1;
        }

        /*車の情報表示*/
        function printInformation(){
            echo "車種：{$this->names}";
            echo "<br />";
            echo "価格：{$this->prices}万円";
            echo "<br />"; 
            echo "定員：{$this->members_capacity}名";
            echo "<br />"; 
            echo "加速度：{$this->acceleration}(m/s^2)";
            echo "<br />"; 
            echo "減速度：{$this->deceleration}(m/s^2)";
            echo "<br />"; 
            echo "最高速度：{$this->max_velocity}km/h";
            echo "<br />";
        }
    }
?>