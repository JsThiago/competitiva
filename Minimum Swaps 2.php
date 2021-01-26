<?php

// Complete the minimumSwaps function below.

function minimumSwaps($arr)
{
    $totalSwap = 0;
    $min = array_search(min($arr), $arr);
    if ($min !== 0) {
        $aux = $arr[0];
        $arr[0] = $arr[$min];
        $arr[$min] = $aux;
        $totalSwap++;
    }
    for ($i = 1; $i < count($arr); $i++) {
        if (abs($arr[$i] - $arr[0]) !== $i) {
            $totalSwap++;
            $aux = $arr[$i];
            $arr[$i] = $arr[$arr[$i] - $arr[0]];
            $arr[$aux - $arr[0]]  = $aux;
            $i--;
        }
    }
    return $totalSwap;
}


$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$res = minimumSwaps($arr);

print_r($res);

fclose($stdin);
