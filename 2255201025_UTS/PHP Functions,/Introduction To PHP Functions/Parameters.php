<?php
//Muhammad Syafiq Firdaus Affan
//2255201025
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
// kelas A