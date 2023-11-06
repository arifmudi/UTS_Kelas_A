<?php
//NAMA:MIFTAHUL FAUZAN
namespace Codecademy;
function willWeEat($mealType, $isHungry) {
  if ($mealType === "dessert" || $isHungry === TRUE) {
    return "Yum. Thanks!";
  } else {
    return "No thanks. We're not hungry.";
  }
}
//NIM:2255201023
echo willWeEat("dessert", false);
echo "\n\n";
echo willWeEat("dinner", false);
//KELAS:A