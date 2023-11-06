<?php
namespace Codecademy;
//NAMA : M. RYAN MAULANA NST

function willWeEat($meal_type, $is_hungry){
  if ($meal_type === "dessert" || $is_hungry){
    return "Yum. Thanks!";
  } else {
    return "No thanks. We're not hungry.";
  }
}
//NIM : 2255201022
echo willWeEat("dessert", false);
echo "\n\n";
//KELAS : A
echo willWeEat("dinner", false);

?>