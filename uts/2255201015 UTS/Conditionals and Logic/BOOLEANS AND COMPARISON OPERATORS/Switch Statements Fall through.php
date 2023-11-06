<?php
function returnSeason($month){
    switch ($month) {
      case "December":
      case "January":
      case "February":  
        return "winter";
      case "March":
      case "April":
      case "May":  
        return "spring";
      case "June":
      case "July":
      case "August":  
        return "summer";
      case "September":
      case "October":
      case "November":  
        return "fall";   
      } 
  }
   //   Nama:Catur nurul huda
//   NIm: 2255201015 
  echo returnSeason("January");
  echo "\n\n";  
  echo returnSeason("April");
  echo "\n\n";
  echo returnSeason("August");
  echo "\n\n";
  echo returnSeason("November");  