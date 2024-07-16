<?php 
$article = "HellO world, thiS Is a Sample Article. Did You Notice the mixEd caSe";
$article = strtolower($article);
$string1 = "hello world. how are you";

$parts = explode(".",$article);
$fixed = "";
for($i=0;$i<count($parts);$i++){
    $parts[$i] = ucfirst(trim($parts[$i]));
}

$fixed = join(". ", $parts);
echo $fixed;