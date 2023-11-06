<?php
namespace Codecademy;

function markAnswer($kar)
{
if ($kar) {
  return "mobil";
}else {
    return "senjata";
}
}
echo markAnswer(FALSE);
echo "\n\n";
echo markAnswer(TRUE);
echo "\n\n";