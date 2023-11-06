<?php
namespace Codecademy;
//NAMA : M. RYAN MAULANA NST

function both($first, $second)
//NIM : 2255201022
{
  if ($first){
    if ($second){
      return "both";
    } else {
      return "not both";
    }
  } else {
    return "not both";
  }
}
//KELAS : A

echo both(TRUE, TRUE);
echo "\n\n";
echo both(FALSE, FALSE);
echo "\n\n";
echo both(TRUE, FALSE);

?>