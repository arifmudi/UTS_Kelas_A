<?php
//NAMA : M. RYAN MAULANA NST

function notFound()
//NIM : 2255201022
{
  echo "ERROR: Page not found!\n";
  return 404;
}
//KELAS : A

function greetLearner()
{
  echo "Hello, Learner!\n";
  echo "I hope you're (still) enjoying PHP!\n";
  echo "Love, Codecademy\n";
  return "<3";
}

// Don't change the code below:

$error = notFound(); 
$heart = greetLearner();

echo "I received a $error, but it's ok because I also received $heart.";

?>