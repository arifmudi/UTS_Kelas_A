<?php
//NAMA:KHAIRUNNISA
namespace Codecademy;
//NIM:225201004
function calculateTip($total_cost) {
  $tip = $total_cost * 0.18;
  $new_total = $total_cost + $tip;
  return round($new_total);
}

echo calculateTip(100) . "\n"; // Output: 118
echo calculateTip(35) . "\n"; // Output: 41
echo calculateTip(88.77) . "\n"; // Output: 105
?>
//KELAS:A