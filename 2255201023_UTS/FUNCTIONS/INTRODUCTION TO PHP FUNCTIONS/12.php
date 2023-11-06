<?php
//NAMA:MIFTAHUL FAUZAN

$language = "PHP";
$topic = "scope";

function generateLessonName($concept)
{
  global $language;
  return $language . ": " . $concept;
}
//NIM:2255201023
echo generateLessonName($topic);
//KELAS:A