<?php
//NAMA:KHAIRUNNISA
namespace Codecademy;
function willWeEat($mealType, $isHungry) {
  if ($mealType === "dessert" || $isHungry === TRUE) {
    return "Yum. Thanks!";
  } else {
    return "No thanks. We're not hungry.";
  }
}
//NIM:2255201004
echo willWeEat("dessert", false);
echo "\n\n";
echo willWeEat("dinner", false);
//KELAS:A