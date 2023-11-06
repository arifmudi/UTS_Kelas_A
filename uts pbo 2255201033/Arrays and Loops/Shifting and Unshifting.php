<?php
namespace Cubabababababaababbba;
$record_holders = [];

array_unshift($record_holders, "Tim Buru Narkoba", 
"Samsul evans", "Chris Atep", "Tatang Baggot", "Udin Rodriguez");

echo implode(", ", $record_holders) . "\n\n";

array_shift($record_holders);

echo implode(", ", $record_holders) . "\n\n";

array_unshift($record_holders, "Coach Justin", "Arkan Tidore");

echo implode(", ", $record_holders) . "\n\n";

array_shift($record_holders);

echo implode(", ", $record_holders) . "\n\n";

array_unshift($record_holders, "Usman mimaman");

echo implode(", ", $record_holders) . "\n\n";
