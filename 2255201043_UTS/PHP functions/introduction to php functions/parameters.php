<?php
//Rian Eka Putra
//2255201043
//Kelas A
// Write your code below:
function increaseEnthusiasm($luigi)
{
  return $luigi . "!";
}

function repeatThreeTimes($luigi)
{
  return $luigi . $luigi . $luigi;
}  

echo increaseEnthusiasm("halo");

echo repeatThreeTimes("Aku Jawa");

echo increaseEnthusiasm(repeatThreeTimes("Hahaha"));