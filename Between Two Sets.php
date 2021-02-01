<?php

/*
 * Complete the 'getTotalX' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY a
 *  2. INTEGER_ARRAY b
 */


function lcm($arr)
{

    $i = 2;
    $lcm = 1;
    if (count($arr) === 1) {
        return $arr[0];
    }
    while (count($arr) !== 0) {
        $pass = 0;
        $oneTime = false;
        for ($j = 0; $j < count($arr); $j++) {

            if ($arr[$j] % $i === 0 && $arr[$j] !== 1) {
                $arr[$j] = $arr[$j] / $i;
                if ($arr[$j] === 1) {
                    array_splice($arr, $j, 1);
                    $j--;
                }
                if (!$oneTime) {
                    $oneTime = true;
                    $lcm *= $i;
                }
            } else {
                $pass++;
            }
        }
        if ($pass === count($arr)) {
            $i++;
            $pass = 0;
        }
    }
    return $lcm;
}



function getTotalX($a, $b)
{
    $lcm = lcm($a);
    $i = 1;
    $result = [];
    $multiple = $lcm;
    while ($multiple <= min($b)) {
        $isFactor = 0;
        for ($j = 0; $j < count($b); $j++) {
            if ($b[$j] % $multiple === 0) {
                $isFactor++;
            }
        }
        if ($isFactor === count($b)) {
            $result[] = $multiple;
        }
        $i++;
        $multiple = $lcm * $i;
    }
    return count($result);
}





//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

//$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

//$n = intval($first_multiple_input[0]);

//$m = intval($first_multiple_input[1]);

//$arr_temp = rtrim(fgets(STDIN));

//$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

//$brr_temp = rtrim(fgets(STDIN));

//$brr = array_map('intval', preg_split('/ /', $brr_temp, -1, PREG_SPLIT_NO_EMPTY));

$total = getTotalX([2, 4], [16, 32, 96]);

//fwrite($fptr, $total . "\n");


//fclose($fptr);
