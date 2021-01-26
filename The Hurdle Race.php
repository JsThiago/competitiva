<?php

// Complete the hurdleRace function below.
function hurdleRace($k, $height)
{
    $max = $height[0];
    foreach ($height as $number) {
        if ($number > $max) {
            $max = $number;
        }
    }
    if ($max > $k) {
        return $max - $k;
    }
    return 0;
}


$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nk_temp);
$nk = explode(' ', $nk_temp);

$n = intval($nk[0]);

$k = intval($nk[1]);

fscanf($stdin, "%[^\n]", $height_temp);

$height = array_map('intval', preg_split('/ /', $height_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = hurdleRace($k, $height);

print($result);

fclose($stdin);
