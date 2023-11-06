<?php
namespace Codecademy; 

function clapYourHands($is_happy, $knows_it){
  if ($is_happy && $knows_it){
    return "PUKUL!";
  } else {
    return ":(";
  }
}

echo clapYourHands(TRUE, TRUE);
echo "\n\n";
echo clapYourHands(TRUE, FALSE); 