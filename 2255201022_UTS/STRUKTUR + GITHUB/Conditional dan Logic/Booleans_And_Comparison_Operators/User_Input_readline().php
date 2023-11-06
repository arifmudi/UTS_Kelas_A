<?php
namespace Codecademy;
//NAMA : M. RYAN MAULANA NST

echo "Hello, there. What's your first name?\n";  
//NIM : 2255201022
$name = readline(">> ");
//KELAS : A
$name_length = strlen($name);
if ($name_length > 8) {
  echo "Hi, ${name}. That's a long name.";
} elseif ($name_length > 3) {
  echo "Hi, ${name}.";
} else {
  echo "Hi, ${name}. That's a short name.";
}

?>