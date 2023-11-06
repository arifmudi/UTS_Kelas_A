<?php
namespace Codecademy;
//NAMA : M. RYAN MAULANA NST

$my_car = [
  "oil" => "black and clumpy",
  "brakes" => "new",
  "tires" => "old with worn treads",
  "filth" => "bird droppings", 
  "wiper fluid" => "full", 
  "headlights" => "bright"
];
//NIM : 2255201022
print_r($my_car);
// Write your code below:
$my_car["oil"] = "new and premium";
//KELAS : A

$my_car["tires"] = "new with deep treads";


unset ($my_car["filth"]);

print_r($my_car);

?>
