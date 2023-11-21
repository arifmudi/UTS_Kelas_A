<?php
//DANDY ADITYA RIFAEL
namespace Codecademy;

function clapYourHands($is_happy, $knows_it){
    if ($is_happy && $knows_it){
        return "CLAP!";
    } else {
        return ":(";
    }
}
//2155201005
echo clapYourHands(TRUE, TRUE);
echo "\n\n";
echo clapYourHands(TRUE, FALSE);
//Kelas: A
