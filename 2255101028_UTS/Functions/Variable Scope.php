<?php
// Nama :Putri cindy claudia
// NIM  :2255201028
// Kelas : A
$language = "PHP";
$topic = "scope";

function generateLessonName($concept)
{
  global $language;
  return $language . ": " . $concept;
}

echo generateLessonName($topic);