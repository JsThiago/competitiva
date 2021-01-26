<?php

// Complete the minimumBribes function below.
function swap($arr, $p)
{
    $aux = $arr[$p];
    $arr[$p] = $arr[$p - 1];
    $arr[$p - 1] = $aux;
    return $arr;
}
function minimumBribes($q)
{
    $i = count($q) - 1;
    $count = 0;
    while ($i >= 0) {
        if ($q[$i] !== $i + 1) {
            if ($q[$i - 1] === $i + 1 && $i - 1 > 0) {
                $count++;
                $q = swap($q, $i);
            } else if ($q[$i - 2] === $i + 1) {
                $count += 2;
                $q = swap($q, $i - 1);
                $q = swap($q, $i);
            } else {
                print("Too chaotic");
                return 0;
            }
        }

        $i--;
    }


    print($count . "\n");
}





minimumBribes([1, 2, 5, 3, 7, 8, 6, 4]);



//close($stdin);
