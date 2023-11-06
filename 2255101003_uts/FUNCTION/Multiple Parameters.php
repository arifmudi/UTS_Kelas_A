<?php
// Write your code below:
function calculateArea($height, $width)
{
  return $height * $width;
}

function calculateVolume($height, $width, $depth)
{
  return $height * $width * $depth;
}  

echo calculateArea(5, 10);
echo "\n";
echo calculateVolume(4, 11, 7);