<?php
//NAMA:KHAIRUNNISA
namespace Codecademy;
//NIM:2255201004
function markAnswer($is_correct)
{
  if ($is_correct)
  {
 return "green";
  } else {
    return "red";
  }
}
echo markAnswer(FALSE);
echo "\n\n";
echo markAnswer(TRUE);
echo "\n\n";
//KELAS:A