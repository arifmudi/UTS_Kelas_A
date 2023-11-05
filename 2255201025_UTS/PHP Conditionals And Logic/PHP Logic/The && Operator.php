<?php
//Muhammad Syafiq Firdaus Affan
//2255201025
function clapYourHands($is_happy, $knows_it){
  if ($is_happy && $knows_it){
    return "CLAP!";
  } else {
    return ":(";
  }
}
// kelas A
echo clapYourHands(TRUE, TRUE);
echo "\n\n";
echo clapYourHands(TRUE, FALSE); 