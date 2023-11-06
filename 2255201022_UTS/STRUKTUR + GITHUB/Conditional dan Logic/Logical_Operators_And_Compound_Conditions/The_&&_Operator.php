<?php
namespace Codecademy; 
//NAMA : M. RYAN MAULANA NST

function clapYourHands($is_happy, $knows_it){
  if ($is_happy && $knows_it){
    return "CLAP!";
  } else {
    return ":(";
  }
}
//NIM : 2255201022
echo clapYourHands(TRUE, TRUE);
echo "\n\n";
//KELAS : A
echo clapYourHands(TRUE, FALSE); 

?>