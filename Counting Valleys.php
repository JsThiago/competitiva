<?php

/*
 * Complete the 'countingValleys' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER steps
 *  2. STRING path
 */

function countingValleys($steps, $path)
{
    $up = 0;
    $down = 0;
    $montain = 0;
    $valley = 0;
    $isValley = false;
    for ($i = 0; $i < strlen($path); $i++) {
        if ($path[$i] === "U") {
            if ($down === 0) {
                $up++;
                if ($down === 2) {
                    $montain++;
                }
            } else {
                $down--;
                if ($down === 0) {
                    $isValley = false;
                }
            }
        } else {
            if ($up === 0) {
                $down++;
                if (!$isValley) {
                    $valley++;
                    $isValley = true;
                }
            } else {
                $up--;
            }
        }
    }
    return $valley;
}

$steps = 8;

//$path = file_get_contents("Counting Valleys.txt");
$path = "DUDDDUUDUU";

$result = countingValleys($steps, $path);

print($result);
