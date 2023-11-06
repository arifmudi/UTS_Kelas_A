<?php
//NAMA:KHAIRUNNISA
for ($i = 10; $i >= 0; $i--) {
  if ($i === 6) {
    continue;
  } elseif ($i === 2) {
    echo "Ready!\n";
  } elseif ($i === 1) {
    echo "Set!\n";
    break;
    //NIM:2255201004
  } elseif ($i === 0) {
    echo "Go!\n";
  } else {
    echo $i . "\n";
  }
}
?>
//KELAS:A