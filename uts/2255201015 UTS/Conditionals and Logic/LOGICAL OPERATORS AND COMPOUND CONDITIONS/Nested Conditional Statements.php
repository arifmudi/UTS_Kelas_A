<?php
function both($one, $two)
{
  if ($one){
    if ($two){
      return "both";
    } else {
      return "not both";
    }
  } else {
    return "not both";
  }
}
//   Nama:Catur nurul huda
//   NIm: 2255201015
echo both(TRUE, TRUE);
echo "\n\n";
echo both(FALSE, FALSE);
echo "\n\n";
echo both(TRUE, FALSE);