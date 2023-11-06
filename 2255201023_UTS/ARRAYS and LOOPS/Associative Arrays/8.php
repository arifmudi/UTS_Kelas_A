<?php
//NAMA:MIFTAHUL FAUZAN
namespace Codecademy;
$doge_meme = ["top_text" => "Such Python", "bottom_text" => "Very language. Wow.", "img" => "very-cute-dog.jpg", "description" => "An adorable doge looks confused."];

$bad_meme = ["top_text" => "i don't know", "bottom_text" => "i can't think of anything", "img" => "very-fat-cat.jpg", "description" => "A very fat cat looks happy."];

// Write your code below:
function  createMeme($arr) 
{
  $arr["top_text"] = "Much PHP";
  $arr["bottom_text"] = "Very programming. Wow.";
  return $arr;
    
}
//NIM:2255201023
function fixMeme (&$arr) 
{
  $arr["top_text"] = "Much PHPnnn";
  $arr["bottom_text"] = "Very programming. Wow.nnnn";    
}
fixMeme ($bad_meme);
echo $bad_meme["top_text"]; // Prints: red
//KELAS:A

