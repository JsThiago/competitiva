<?php

/*
 * Complete the 'birthdayCakeCandles' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY candles as parameter.
 */

function birthdayCakeCandles($candles)
{
    $max = $candles[0];
    $maxCount = 0;
    for ($i = 0; $i < count($candles); $i++) {
        if ($candles[$i] > $max) {
            $max = $candles[$i];
            $maxCount = 0;
        }
        if ($candles[$i] == $max) {

            $maxCount++;
        }
    }
    print("$maxCount");
}


$candles_count = intval(trim(fgets(STDIN)));

$candles_temp = rtrim(fgets(STDIN));

$candles = array_map('intval', preg_split('/ /', $candles_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = birthdayCakeCandles($candles);
