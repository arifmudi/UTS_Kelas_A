<?php
namespace Codecademy;
//NAMA : M. RYAN MAULANA NST

function chooseCheckoutLane($items)
//NIM : 2255201022
{
  if ($items <= 12){
    return "express lane";
  } else {
    return "regular lane";
  }
}
//KELAS : A

function canIVote ($age) 
{
    if($age >= 18){
        return "yes";
       } else {
       return "no";
    }
 }

echo chooseCheckoutLane(1);
echo "\n\n";
echo chooseCheckoutLane(13);
echo "\n\n";
echo canIVote(19);
echo "\n\n";
echo canIVote(13);

?>