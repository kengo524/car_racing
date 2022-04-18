<?php
  // 各クラスを読み込む
  require_once 'classes/ferrari.php';

  $ferrari = new Ferrari();
  echo "リフトアップ前の車高{$ferrari->height}mm";
  echo "<br />";
  echo "リフトアップ前の加速度{$ferrari->acceleration}(m/s^2)";
  echo "<br />";
  echo "<br />";

  $ferrari->liftUp(1);
  echo "リフトアップ後の車高{$ferrari->height}mm";
  echo "<br />";
  echo "リフトアップ後の加速度{$ferrari->acceleration}(m/s^2)";
  echo "<br />";

  $ferrari->liftDown(1);
  echo "リフトダウン後の車高{$ferrari->height}mm";
  echo "<br />";
  echo "リフトダウン後の加速度{$ferrari->acceleration}(m/s^2)";
  echo "<br />";

?>