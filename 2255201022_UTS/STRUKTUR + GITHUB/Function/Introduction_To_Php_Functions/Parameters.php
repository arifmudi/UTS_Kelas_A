<?php
// Write your code below:
function increaseEnthusiasm($str_param)
//NAMA : M. RYAN MAULANA NST
{
  return $str_param . "!";
}
//NIM : 2255201022

function repeatThreeTimes($str_param)
{
  return $str_param . $str_param . $str_param;
}  
//KELAS : A

echo increaseEnthusiasm("oh");

echo repeatThreeTimes("wow");

echo increaseEnthusiasm(repeatThreeTimes("hai"));

?>