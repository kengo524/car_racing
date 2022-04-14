<?php
  // 各クラスを読み込む
    require_once 'classes/honda.php';
    require_once 'classes/nissan.php';
    require_once 'classes/ferrari.php';

  // 各メーカーの性能を表示
    $honda = new Honda();
    $honda->printInformation();

    $nissan = new Nissan();
    $nissan->printInformation();

    $ferrari = new Ferrari();
    $ferrari->printInformation();
?>