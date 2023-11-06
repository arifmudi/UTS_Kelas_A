<?php
function chooseCheckoutLane($items)
{
  if ($items <= 12){
    return "express lane";
  } else {
    return "regular lane";
  }
}

function canIVote ($age) 
{
    if($age >= 18){
        return "yes";
       } else {
       return "no";
    }
 }

echo chooseCheckoutLane(2);
echo "\n\n";
echo chooseCheckoutLane(14);
echo "\n\n";
echo canIVote(20);
echo "\n\n";
echo canIVote(10);
//   Nama:Catur nurul huda
//   NIm: 2255201015