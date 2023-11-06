<?php
function ternaryCheckout($items)
{
    return $items <= 12 ? "express lane" : "regular lane";
}

function ternaryVote ($age) 
{
  return $age >= 18 ? "yes" : "no";
 }

echo ternaryCheckout(15);
echo "\n\n";
echo ternaryCheckout(3);
echo "\n\n";
echo ternaryVote(12);
echo "\n\n";
echo ternaryVote(20);
//   Nama:Catur nurul huda
//   NIm: 2255201015