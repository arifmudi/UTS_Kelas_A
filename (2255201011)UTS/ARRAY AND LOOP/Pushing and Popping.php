<?php
namespace Codecademy;

$stack = ["sukses", "kegagalan", "perjuangan"];
// Write your code below:
array_push($stack, "pemblokiran", "halangan");
print_r($stack);

array_pop($stack);
array_pop($stack);
array_pop($stack);
array_pop($stack);

print_r($stack);