<?php 
$wrongname = "Abdul..Karim";
$wrongname2 = "Mohammad  Abdul..Karim";
$wrongname3 = "Mohammad  Abdul  Karim";

$fixedname = str_replace(["  ",".."],[" ",". "],$wrongname);
// $fixedname2 = str_replace(["  ",".."],[" ",". "],$wrongname2);
$fixedname2 = str_replace(["  ",".."]," ",$wrongname2);
$fixedname3 = str_replace(["  ",".."],[" ",". "],$wrongname3);


echo $fixedname."\n";
echo $fixedname2."\n";
echo $fixedname3."\n";


