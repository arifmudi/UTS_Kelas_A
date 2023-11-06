<?php
//NAMA : M. RYAN MAULANA NST

$language = "PHP";
//NIM : 2255201022
$topic = "scope";

function generateLessonName($concept)
//KELAS : A
{
  global $language;
  return $language . ": " . $concept;
}

echo generateLessonName($topic);

?>