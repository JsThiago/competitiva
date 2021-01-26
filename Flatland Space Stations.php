<?php

// Complete the flatlandSpaceStations function below.

function binarySearch($a, $v)
{
    $min = pow(10, 5);
    while (count($a) > 1) {
        $i = floor(count($a) / 2);
        if (abs($a[$i] - $v) < $min) {
            $min = abs($a[$i] - $v);
            if ($min === 0) {
                break;
            }
        }
        if ($a[$i] > $v) {
            $a = array_slice($a, 0, $i);
        } else {
            $a = array_slice($a, $i, count($a));
        }
    }
    $min = min(abs($a[0] - $v), $min);

    return $min;
}

function flatlandSpaceStations($n, $c)
{
    sort($c, SORT_NUMERIC);
    $maxValue = max($c);
    $minValue = min($c);
    $distances = [];
    if ($n === count($c)) {
        return 0;
    }
    for ($i = 0; $i < $n; $i++) {

        if ($i === $minValue || $i === $maxValue) {
            $distances[] = 0;
        } else if ($i < $minValue) {
            $distances[] = abs($i - $minValue);
        } else if ($i > $maxValue) {
            $distances[] = abs($i - $maxValue);
        } else {
            $distances[] = binarySearch($c, $i);
        }
    }
    return max($distances);
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");



$result = flatlandSpaceStations(100, [93, 41, 91, 61, 30, 6, 25, 90, 97]);

print($result);

//fwrite($fptr, $result . "\n");


//fclose($fptr);
