<?php
//   Nama:Catur nurul huda
//   NIm: 2255201015
function clapYourHands($is_happy, $knows_it){
    if ($is_happy && $knows_it){
      return "CLAP!";
    } else {
      return ":(";
    }
  }
  
  echo clapYourHands(TRUE, TRUE);
  echo "\n\n";
  echo clapYourHands(TRUE, FALSE); 