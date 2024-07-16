<?php 
$string = "Hello From Ostad PHP Course";

$parts = explode(" ", $string); //delimeter 
$newstring = join("-",$parts);
$newstring = implode("-",$parts);
echo $newstring;
print_r($parts);

// $array = ['H','e','l','l','o',' ','w','o','r','l','d'];

// echo $array[4];

// echo $string[9];

