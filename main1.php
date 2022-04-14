<?php
  // 各クラスを読み込む
    require_once 'honda.php';
    require_once 'nissan.php';
    require_once 'ferrari.php';

  // 各メーカーの性能を表示
    $honda = new Honda();
    $honda->printInformation();

    $nissan = new Nissan();
    $nissan->printInformation();

    $ferrari = new Ferrari();
    $ferrari->printInformation();
?>