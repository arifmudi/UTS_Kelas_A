<?php
namespace Codecademy;
//NAMA : M. RYAN MAULANA NST

function airQuality($color){
  switch ($color){
    case "green":  
      echo "good";
      break;
    case "yellow":  
      echo "moderate";
      break;
    case "orange":  
      echo "unhealthy for sensitive groups";
      break; 
    case "red": 
      echo "unhealthy";
      break;
    case "purple": 
      echo "very unhealthy";
      break;
    case "maroon":
      echo "hazardous";
      break; 
    default: 
      echo "invalid color";
  }
}
//NIM : 2255201022

airQuality("green");
echo "\n\n";
airQuality("yellow");
echo "\n\n";
//KELAS : A
airQuality("maroon");
echo "\n\n";
airQuality("hasjgdlajshgd");

?>