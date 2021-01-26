<?php

/*
 * Complete the 'pickingNumbers' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY a as parameter.
 */

function pickingNumbers($a)
{
    $arr_count = array_count_values($a);
    $max = 0;
    for ($i = 0; $i < count($a); $i++) {
        $value = $arr_count[$a[$i] - 1] + $arr_count[$a[$i]];
        if ($value > $max) {
            $max = $value;
        }
    }
    return $max;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = pickingNumbers($a);

print($result);

fwrite($fptr, $result . "\n");

fclose($fptr);
