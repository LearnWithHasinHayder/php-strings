<?php
$string = "Hello from Ostad Laravel Course"; //offset
$from = 5;
$to = 12;
$length = $to - $from;

$result = substr($string, $from, $length);
echo $result;