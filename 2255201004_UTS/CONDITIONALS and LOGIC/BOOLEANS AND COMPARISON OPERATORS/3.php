<?php
//NAMA:KHAIRUNNISA
namespace Codecademy;
function chooseCheckoutLane($num_items) {
    if ($num_items <= 12) {
        return "express lane";
    } else {
        return "regular lane";
    }
}
//NIM:2255201004
function canIVote($age) {
    if ($age >= 18) {
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
//KELAS:A
