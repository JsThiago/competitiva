<?php
$handle = fopen ("php://stdin","r");
$i = 4;
$d = 4.0;
$s = "HackerRank ";
// Declare second integer, double, and String variables.
$varInt = 0;
$varDouble = 0;
$varString = '-1';
// Read and save an integer, double, and String to your variables.
$varInt = intval(readline());
$varFloat = floatval(readline());
$varString = readline();
// Print the sum of both integer variables on a new line.
print($i+$varInt."\n");
print(number_format($d+$varFloat,1)."\n");
print("$s$varString\n");
// Print the sum of the double variables on a new line.

// Concatenate and print the String variables on a new line
// The 's' variable above should be printed first.

fclose($handle);
?>