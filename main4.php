<?php
    // 各クラスを読み込む
    require_once 'classes/nissan.php';

    $nissan = new Nissan();
    echo "【この車の定員数は".$nissan->getMembersCapacity()."人です。】";
    echo "<br />";
    echo "現在".$nissan->getMembers()."人乗車中";
    echo "<br />";
    echo "この時の加速度は".$nissan->getAcceleration()."(m/s^2)";
    echo "<br />";
    echo "<br />";

    $nissan->getOn(1);
    $nissan->getOn(1);
    $nissan->getOn(1);
    $nissan->getOff(2);
    $nissan->getOn(2);
?>