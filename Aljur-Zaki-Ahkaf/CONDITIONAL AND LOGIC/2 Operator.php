<?php
namespace Codecademy;

function willWeEat($meal_type, $is_hungry){
  if ($meal_type === "dessert" || $is_hungry){
    return "enak. Terima kasih!";
  } else {
    return "Tidak, terima kasih. Kami tidak lapar.";
  }
}



echo willWeEat("dessert", false);
echo "\n\n";
echo willWeEat("dinner", false);