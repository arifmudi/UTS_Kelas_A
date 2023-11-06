<?php
namespace Codecademy;
//NAMA : M. RYAN MAULANA NST

function ternaryCheckout($items)
//NIM : 2255201022
{
    return $items <= 12 ? "express lane" : "regular lane";
}

function ternaryVote ($age) 
{
  return $age >= 18 ? "yes" : "no";
 }
//KELAS : A

echo ternaryCheckout(1);
echo "\n\n";
echo ternaryCheckout(13);
echo "\n\n";
echo ternaryVote(19);
echo "\n\n";
echo ternaryVote(13);