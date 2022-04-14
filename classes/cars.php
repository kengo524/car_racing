<?php
    class Cars{
        public $names;
        public $members_capacity;
        public $members;
        public $prices;
        public $acceleration;
        public $deceleration;
        public $velocity;
        public $max_velocity;
        public $height;

        /*データ入力*/ 
        function initialize($names="",$prices,$members_capacity,$acceleration,$max_velocity){
            $this->names = $names;
            $this->prices = $prices;
            $this->members_capacity = $members_capacity;
            $this->acceleration = $acceleration;
            $this->max_velocity = $max_velocity;
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
            $this->acceleration *= (1 - $this->members*0.05);
            $this->members += 1;
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