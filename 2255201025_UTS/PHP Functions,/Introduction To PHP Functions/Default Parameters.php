<?php
//Muhammad Syafiq Firdaus Affan
//2255201025
function calculateTip($total, $tip = 20)
{
  return $total * (1 + $tip/100);
}


echo calculateTip(550, 75);
echo "\n";
echo calculateTip(380); 
echo "\n";
echo calculateTip(90, 15); 
// kelas A