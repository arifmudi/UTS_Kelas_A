<?php
//NAMA:KHAIRUNNISA
namespace Codecademy;
function agreeOrDisagree($string1, $string2) {
    if (strcmp($string1, $string2) == 0) {
        return "You agree!";
    } else {
        return "You disagree!";
    }
}
echo agreeOrDisagree("left", "right"); 
echo "\n\n";
echo agreeOrDisagree("ok", "ok"); 
echo "\n\n";
//NIM:2255201004
function checkRenewalMonth($renewal_month) {
    $current_month = date("F");
    if ($renewal_month != $current_month) {
        return "Welcome!";
    } else {
        return "Time to renew";
    }
}
$current_month = date("F");
echo checkRenewalMonth($current_month);

echo "\n\n";
echo checkRenewalMonth("July");
//KELAS:A