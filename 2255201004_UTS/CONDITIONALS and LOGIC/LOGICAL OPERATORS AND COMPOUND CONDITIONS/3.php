<?php
//NAMA:KHAIRUNNISA
namespace Codecademy;
function clapYourHands($happiness, $knowIt) {
  if ($happiness === TRUE && $knowIt === TRUE) {
    return "CLAP!";
  } else {
    return ":(";
  }
}
//NIM:2255201004
echo clapYourHands(TRUE, TRUE);
echo "\n\n";
echo clapYourHands(TRUE, FALSE); 
//KELAS:A