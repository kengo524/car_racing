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

        /*初期化 */
        // function __construct($names, $members_capacity, $members, $prices, $acceleration, $deceleration, $velocity, $max_velocity, $height){
        //     $this->names = $names;
        //     $this->members_capacity = $members_capacity;
        //     $this->members = $members;
        //     $this->prices = $prices;
        //     $this->acceleration = $acceleration;
        //     $this->deceleration = $deceleration;
        //     $this->velocity = $velocity;
        //     $this->max_velovity = $max_velocity;
        //     $this->height = $height;
        // }

        /*アクセルを踏む関数 */
        function pushAccel(){
            $this->valocity += 0.1*$this->acceleration; 
            /*time_intervalは別のクラスで定義して呼び出し？ */
            /*仮でtime_interval＝0.1で設定 */   
            return($this->valocity);
        }

        /*ブレーキを踏む関数 */
        function pushBreak(){
            $this->valocity += $time_interval*$this->deceleration;
            return($this->valocity);/*valocityは上と共通だが問題なし？ */
        }

        /*乗車*/
        function getOn(){
            $this->members += $members;
            return($this->members);
        }

        /*降車*/
        function getOff(){
            $this->members -= $members;
            return($this->members);/*$this->membersは上と共通でおｋ？*/
        }

        /*車の情報表示*/
        function printInformation(){
            echo "メーカー：{$this->names}";
            echo "<br />";
            echo "定員：{$this->members_capacity}名";
            echo "<br />"; 
            echo "価格：{$this->prices}万円";
            echo "<br />"; 
            echo "加速度：{$this->acceleration}(m/s^2)";
            echo "<br />"; 
            echo "減速度：{$this->deceleration}(m/s^2)";
            echo "<br />"; 
            echo "最高速度：{$this->max_velocity}km/h";
            echo "<br />";
            echo "車高：{$this->height}mm";
            echo "<br />";
        }
    }
?>