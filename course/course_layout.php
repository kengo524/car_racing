<?php
require_once 'straight.php';
require_once 'curve.php';
require_once 'curve_before.php';

class CourseLayout{
    // コース作成
    public $course_layout = [];

    function __construct(){
        $straight = new Straight();
        $this->course_layout[] = [
            "names" => getNames($straight), 
            "tolerance_velocity" => $straight->tolerance_velocity, 
            "terminate_goal" => $straight->$distance,
        ];

        for($i = 0; $i < mt_rand(2,5); $i++){
            for($j = 0; $j < mt_rand(1,5); $j++){
                $this->course_layout[] = $this->getArrayCourseElement("Straight");
            }
            $this->course_layout[] = $this->getArrayCourseElement("CurveBefore");//カーブ直前のあとは必ずカーブを配置
            $this->course_layout[] = $this->getArrayCourseElement("Curve");
        }
    }

    public static function getCourseLayout(){
        print_r($this->course_layout);
    }

    function getArrayCourseElement($class_name){
        $object = new $class_name();
        return [
            "names" => getNames($object), 
            "tolerance_velocity" => $object->tolerance_velocity, 
            "terminate_goal" => end($this->course_layout)["terminate_goal"] + $object->distance
        ];
    }
}

?>