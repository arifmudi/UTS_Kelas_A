<?php
namespace Codecademy;
//NAMA : M. RYAN MAULANA NST
$is_clicked = TRUE;
//NIM : 2255201022
if ($is_clicked) {
  $link_color = "green";
  echo $link_color;
//KELAS : A
}
function markAnswer($is_correct)
{
  if ($is_correct) {
    return "green";
  } else {
    return "red";
  }
}
echo markAnswer(FALSE);
echo "\n\n";
echo markAnswer(TRUE);
echo "\n\n";

?>