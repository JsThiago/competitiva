<?php

/*
 * Complete the 'nonDivisibleSubset' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER k
 *  2. INTEGER_ARRAY s
 */
//



function nonDivisibleSubset($k, $s)
{
    $on = 0;
    for ($i = 0; $i < count($s); $i++) {
        if ($on === 1) {
            array_splice($s, $i, 1);
        }
        if ($s[$i] % $k === 0) {
            $on = 1;
        }
    }
    $sizeMax = 0;
    for ($l = 0; $l < count($s); $l++) {
        $blackList = [];
        $size = count($s);
        $aux = 0;
        $i = $l;
        while ($aux < count($s)) {
            if ($size <= $sizeMax) {
                break;
            }
            for ($j = 0; $j < count($s); $j++) {
                if (array_search($i, $blackList) !== false) {
                    break;
                }
                if (($s[$i] + $s[$j]) % $k === 0 && $i !== $j && array_search($j, $blackList) === false) {
                    $size--;
                    $blackList[] = $j;
                }
            }
            $aux++;
            $i++;
            if ($i > count($s)) {
                $i = 0;
            }
        }
        if ($size > $sizeMax) {
            $sizeMax = $size;
        }
    }
    return $sizeMax;
}



$first_multiple_input = explode(' ', "15 7");

$n = intval($first_multiple_input[0]);

$k = intval($first_multiple_input[1]);

$s_temp = rtrim("278 576 496 727 410 124 338 149 209 702 282 718 771 575 436");

$s = array_map('intval', preg_split('/ /', $s_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = nonDivisibleSubset($k, $s);

print($result);
