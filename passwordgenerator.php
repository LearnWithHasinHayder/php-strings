<?php
function generatePassword($length, $lowercase, $uppercase, $numbers, $symbols) {
    //lowercase characters
    $lowercaseCharacters = "abcdefghijklmnopqrstuvwxyz";
    //uppercase characters
    $uppercaseCharacters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    //numbers
    $allnumbers = "0123456789";
    //symbols
    $allsymbols = "!@#$%^&*()_+-=[]{}|;':\",./<>?";

    $characters = "";

    if ($lowercase) {
        $characters .= $lowercaseCharacters;
    }

    if ($uppercase) {
        $characters .= $uppercaseCharacters;
    }

    if ($numbers) {
        $characters .= $allnumbers;
    }

    if ($symbols) {
        $characters .= $allsymbols;
    }

    $shuffled = str_shuffle($characters);
    // echo $shuffled;

    $password = substr($shuffled, 0, $length);

    return $password;

}

$generatedPassword = generatePassword(8, true, true, true, true);
echo $generatedPassword;