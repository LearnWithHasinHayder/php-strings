<?php 
$string = "hello world//";
$string1 = "hello world/?&..,$%?#....&&&?";

$trim1 = trim($string," /");
$trim2 = trim($string1," ?/#&.,$%?#");
echo $trim1;
echo "\n";
echo $trim2;