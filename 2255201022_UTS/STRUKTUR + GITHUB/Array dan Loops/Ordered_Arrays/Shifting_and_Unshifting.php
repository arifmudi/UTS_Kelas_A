<?php
namespace Codecademy;
$record_holders = [];
// Write your code below:
array_unshift($record_holders, "Tim Montgomery", 
"Maurice Greene", "Donovan Bailey", "Leroy Burrell", "Carl Lewis");
//NAMA : M. RYAN MAULANA NST

echo implode(", ", $record_holders) . "\n\n";
//NIM : 2255201022

array_shift($record_holders);
//KELAS : A

echo implode(", ", $record_holders) . "\n\n";

array_unshift($record_holders, "Justin Gatlin", "Asafa Powell");

echo implode(", ", $record_holders) . "\n\n";

array_shift($record_holders);

echo implode(", ", $record_holders) . "\n\n";

array_unshift($record_holders, "Usain Bolt");

echo implode(", ", $record_holders) . "\n\n";

?>