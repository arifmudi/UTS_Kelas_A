<?php
//   Nama:Catur nurul huda
//   NIm: 2255201015
function willWeEat($meal_type, $is_hungry){
    if ($meal_type === "dessert" || $is_hungry){
      return "Yum. Thanks!";
    } else {
      return "No thanks. We're not hungry.";
    }
  }
  
  
  
  echo willWeEat("dessert", false);
  echo "\n\n";
  echo willWeEat("dinner", false);