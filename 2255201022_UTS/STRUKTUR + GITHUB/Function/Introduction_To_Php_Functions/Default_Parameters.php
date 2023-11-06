<?php
// Write your code below:
function calculateTip($total, $tip = 20)
//NAMA : M. RYAN MAULANA NST
{
  return $total * (1 + $tip/100);
}
//NIM : 2255201022

echo calculateTip(100, 25);
//KELAS : A
echo "\n";
echo calculateTip(100); 
echo "\n";
echo calculateTip(65, 15); 

?>
