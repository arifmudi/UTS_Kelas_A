<?php
namespace Codecademy;
//NAMA : M. RYAN MAULANA NST

$is_admin = FALSE;
//NIM : 2255201022
$is_user = TRUE;
if ($is_admin or $is_user){
  echo "You can change the password.\n";
}
//KELAS : A
$correct_pin = TRUE;
$sufficient_funds = TRUE;
if ($correct_pin and $sufficient_funds){
  echo "You can make the withdrawal.";
}

?>