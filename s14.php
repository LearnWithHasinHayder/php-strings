<?php
$string = "Rahim, Karim, Jabbar, Matin ajke school theke palaise";
// $search = "Polash";
$search = "Rahim";

$found = strpos($string, $search);

// echo $found;

if ($found !== false) {
    echo "{$search} ajke school theke palaise";
} else {
    echo "{$search} ajke school theke palayni";
}