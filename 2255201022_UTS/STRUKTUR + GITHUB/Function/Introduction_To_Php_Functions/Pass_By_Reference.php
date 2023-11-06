<?php
$string_one = "you have teeth";
//NAMA : M. RYAN MAULANA NST
$string_two = "toads are nice";
//NIM : 2255201022
$string_three = "brown is my favorite color";
// Write your code below:
function convertToQuestion(&$str)
//KELAS : A
{
  $str = "Do you think " . $str . "?\n";
}
convertToQuestion($string_one);
convertToQuestion($string_two);
convertToQuestion($string_three);
echo $string_one;
echo $string_two;
echo $string_three;

?>