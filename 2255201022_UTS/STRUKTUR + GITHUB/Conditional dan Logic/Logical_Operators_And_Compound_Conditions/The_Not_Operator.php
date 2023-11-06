<?php
namespace Codecademy;
//NAMA : M. RYAN MAULANA NST
function duckDuckGoose($is_goose){
  if (!$is_goose){
    return "duck";
  } else {
    return "goose!";
  }
}
//NIM : 2255201022
echo duckDuckGoose(FALSE);
echo "\n";
echo duckDuckGoose(FALSE);
//KELAS : A
echo "\n";
echo duckDuckGoose(TRUE);

?>