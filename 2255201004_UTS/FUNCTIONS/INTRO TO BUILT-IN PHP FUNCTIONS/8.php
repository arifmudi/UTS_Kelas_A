<?php
namespace Codecademy;
//NAMA:KHAIRUNNISA

// Write your code below:
function convertToShout($str) 
{
  return strtoupper($str) . "!";
}
//NIM:2255201004
function tipGenerously($cost) {
  return ceil($cost * 1.2);
}
echo tipGenerously(100.00); 
echo tipGenerously(982.27); 
echo tipGenerously(15.67); 
echo tipGenerously(66.18); 
echo tipGenerously(21.65); 

function calculateCircleArea($diameter) {
  return pi() * pow($diameter / 2, 2);
}
echo calculateCircleArea(25); 

//KELAS:A
