<?php
//various string operations

$str1 = "Hello";
$str2 = "World";

$str3 = $str1 . " " . $str2;
$str3 = "{$str1} {$str2}";
// echo $str3;

$date = "16th July";
$expense = "516 Taka";

// $result = "On " . $date . " Total Expense = " . $expense;

$result = "On {$date} Total expense = {$expense}";

echo $result;