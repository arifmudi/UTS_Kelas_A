<?php

$prime_numbers = array(2, 3, 5, 7, 11, 13, 17);  
  

$animals = ["dog", "cat", "turtle", "cow"];  


print_r($prime_numbers);

echo "\n\n";


echo implode(", ", $animals);


$prime_numbers[] = 19;


$favorite_animal = $animals[0];
echo "\nMy favorite animal: " . $favorite_animal;


$animals[1] = "tiger";


echo "\nBefore pop: " . implode(", ", $animals);
array_pop($animals);
echo "\nAfter pop: " . implode(", ", $animals);


echo "\nBefore push: " . implode(", ", $prime_numbers);
array_push($prime_numbers, 23, 29, 31, 37, 41);
echo "\nAfter push: " . implode(", ", $prime_numbers);


echo "\nBefore shift: " . implode(", ", $animals);
array_shift($animals);
echo "\nAfter shift: " . implode(", ", $animals);


echo "\nBefore unshift: " . implode(", ", $animals);
array_unshift($animals, "horse", "zebra", "lizard");
echo "\nAfter unshift: " . implode(", ", $animals);


$treasure_hunt = ["lumpur", "kerak", 99, ["botol torpedo", 8, ":)", "abu rokok", ["perkakas", "lintah", ["GOLD!"], "gunung", "stadion emyu", "kelabang"], "batu bata"], "cahaya matahari", "hujan november", 2.11];

echo "\nWe found " . $treasure_hunt[3][4][2][0];
