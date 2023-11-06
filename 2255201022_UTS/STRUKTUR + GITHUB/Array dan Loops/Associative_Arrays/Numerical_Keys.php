<?php
namespace Codecademy;
//NAMA : M. RYAN MAULANA NST

// Write your code below:
$hybrid_array = ["Lapu-lapu", "Minotaur", "Naik", "Motor", "Yishunshin", "Baca", "Yasin", "Diaminin"];
//NIM : 2255201022
$hybrid_array[8] = "five more";
//KELAS : A
print_r($hybrid_array);
array_push($hybrid_array, rand());
echo $hybrid_array[9];

?>