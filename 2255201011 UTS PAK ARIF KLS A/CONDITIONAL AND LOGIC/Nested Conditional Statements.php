<?php
namespace Codecademy;

function both($first, $second)
{
  if ($first){
    if ($second){
      return "keduanya";
    } else {
      return "tidak keduanya";
    }
  } else {
    return "tidak keduanya";
  }
}

echo both(TRUE, TRUE);
echo "\n\n";
echo both(FALSE, FALSE);
echo "\n\n";
echo both(TRUE, FALSE);