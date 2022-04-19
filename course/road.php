<?php
abstract class Road{
    public string $names;
    public int $distance;
    public float $tolerance_velovity;

    function __construct(
        $names,
        $distance,
        $tolerance_velocity,
    ){
        $this->names = $names;
        $this->distance = $distance;
        $this->tolerance_velocity = $tolerance_velocity;
    }

    // データ取得
    function getNames(){
        return $this->names;
    }
    function getDistance(){
        return $this->distance;
    }
    function getToleranceVelocity(){
        return $this->tolerance_velocity;
    }

    function setDistance($distance){
        $this->distance = $distance;
    }

    // public static function printRoadInformation(){
    //     echo "種別：{$this->names}\n";
    //     echo "距離：{$this->distance}m\n";
    //     echo "許容速度：{$this->tolerance_velocity}m/s\n";
    // }
}
?>