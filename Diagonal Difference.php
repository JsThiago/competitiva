<?php

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr,$n) {
    $d_sum = [0,0];
    for($i=0;$i<$n;$i++){
        //diagonal principal
        $d_sum[0] = $arr[$i][$i] + $d_sum[0];
        //diagonal secundária
        $d_sum[1] = $arr[$i][$n-$i-1] + $d_sum[1];
    }
    return $d_sum[0] - $d_sum[1];
}

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr,$n);


print(abs($result));
