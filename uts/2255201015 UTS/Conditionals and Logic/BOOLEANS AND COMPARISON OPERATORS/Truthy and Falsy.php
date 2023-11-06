<?php

function truthyOrFalsy ($value)
{
  if ($value){
    return "True";
  } else {
    return "False";
  }
}
echo truthyOrFalsy(TRUE);
echo "\n\n";
echo truthyOrFalsy(FALSE);
echo "\n\n";
echo truthyOrFalsy("kucing");
echo "\n\n";
echo truthyOrFalsy("");
echo "\n\n";
echo truthyOrFalsy("123345678910");
echo "\n\n";
echo truthyOrFalsy("0");
echo "\n\n";
//   Nama:Catur nurul huda
//   NIm: 2255201015