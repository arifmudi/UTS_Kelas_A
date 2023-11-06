<?php
//Muhammad Syafiq Firdaus Affan
//2255201025
$dinosaurus = "Brontosaurus";
$jenis = "Hewan Purba";

function generateLessonName($trex)
{
  global $dinosaurus;
  return $dinosaurus . ": " . $trex;
}

echo generateLessonName($jenis);
// kelas A