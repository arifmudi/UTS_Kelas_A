<?php
//Muhammad Syafiq Firdaus Affan
//2255201025

// Write your code below:
function convertToShout($jawa)
{
  return strtoupper($jawa) . "!";
}

function tipGenerously($sunda)
{
  return ceil($sunda * 1.2);
}

function calculateCircleArea($sumatra)
{
  return pi() * ($sumatra/2)**2;
}

echo convertToShout("Jawa adalah Koentji"); 
echo "\n";
echo convertToShout("Sunda adalah Gembok");
echo "\n";
echo tipGenerously(100.00);
echo "\n";
echo tipGenerously(982.27);
echo "\n";
echo calculateCircleArea(6); 
echo "\n";
echo calculateCircleArea(29);   
// kelas A