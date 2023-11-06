<?php
//NAMA:KHAIRUNNISA

$language = "PHP";
$topic = "scope";

function generateLessonName($concept)
{
  global $language;
  return $language . ": " . $concept;
}
//NIM:2255201004
echo generateLessonName($topic);
//KELAS:A