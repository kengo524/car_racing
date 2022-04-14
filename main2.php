<?php
  // 各クラスを読み込む
  require_once 'classes/ferrari.php';

  $ferrari = new Ferrari();
  echo "リフトアップ前の車高{$ferrari->height}mm";
  echo "<br />";
  echo "リフトアップ前の加速度{$ferrari->acceleration}(m/s^2)";
  echo "<br />";
  echo "<br />";

  $ferrari->liftUp();
  echo "リフトアップ後の車高{$ferrari->height}mm";
  echo "<br />";
  echo "リフトアップ後の加速度{$ferrari->acceleration}(m/s^2)";
  echo "<br />";

  $ferrari->liftDown();
  echo "リフトダウン後の車高{$ferrari->height}mm";
  echo "<br />";
  echo "リフトダウン後の加速度{$ferrari->acceleration}(m/s^2)";
  echo "<br />";

?>