<?php
    require_once 'cars.php';

    //リフトアップした場合
    function liftUp(){
        echo "※リフトアップ実行";
        echo "<br />";
        $this->height += 40;
        $this->acceleration *= 0.8;
    }

    //リフトダウンした場合
    function liftDown(){
    echo "※リフトダウン実行";
    echo "<br />";
    $this->height -= 40;
    $this->acceleration /= 0.8;
    }
?>