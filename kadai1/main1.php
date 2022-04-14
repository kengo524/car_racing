<?php
  // 各クラスを読み込む
    require 'honda.php';
    require 'nissan.php';
    require 'ferrari.php';

  // cars.phpより各メーカーの性能を表示
    $honda->printInformation();
    $nissan->printInformation();
    $ferrari->printInformation();
?>