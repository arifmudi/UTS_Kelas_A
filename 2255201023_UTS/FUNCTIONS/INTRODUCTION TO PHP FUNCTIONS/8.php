<?php
//NAMA:MIFTAHUL FAUZAN
// Write your code below:
function increaseEnthusiasm($str_param)
{
  return $str_param . "!";
}

function repeatThreeTimes($str_param)
{
  return $str_param . $str_param . $str_param;
}  
//NIM:2255201023

echo increaseEnthusiasm("AA");

echo repeatThreeTimes("AAA");

echo increaseEnthusiasm(repeatThreeTimes("AAAA"));
//KELAS:A