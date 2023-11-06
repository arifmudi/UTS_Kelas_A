<?php
//NAMA:MIFTAHUL FAUZAN
namespace Codecademy;
function ternaryCheckout($num_items) {
    return ($num_items <= 12) ? "express lane" : "regular lane";
}

function ternaryVote($age){
return ($age >= 18) ? "yes" : "no";
}
//NIM:2255201023
echo ternaryCheckout(1);
echo "\n\n";
echo ternaryCheckout(13);
echo "\n\n";
echo ternaryVote(19);
echo "\n\n";
echo ternaryVote(13);
//KELAS:A