<?php
//NAMA : M. RYAN MAULANA NST
  for ($i = 10; $i >= 0; $i--) {
    if ($i === 2) {
      echo "Ready!\n";
//NIM : 2255201022
    } elseif ($i === 1) {
      echo "Set!\n";
      break;
//KELAS : A
    } elseif ($i === 0) {
      echo "Go!\n";
    } elseif ($i===6) {
      continue;
    } else{
      echo $i . "\n";
    }
  }

?>