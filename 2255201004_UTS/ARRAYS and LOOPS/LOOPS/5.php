<?php
//NAMA:KHAIRUNNISA
$scores = [
  "Alice" => 99,
  "Bob" => 95,
  "Charlie" => 98,
  "Destiny" => 91,
  "Edward" => 88
];
//NIM:2255201004
foreach ($scores as $score) {
  echo "Someone received a score of $score.\n";
  
}
echo "\n";
foreach ($scores as $name => $score) {
  echo "$name received a score of $score.\n";
}
//KELAS:A
