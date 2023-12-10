<?php
  $plant_height = 11;
  do  {
    echo "The plant is $plant_height tall.\n";
    if ($plant_height >= 76) {
      echo "And can produce fruit.\n";
    }
    $plant_height ++;
  } while ($plant_height < 50);