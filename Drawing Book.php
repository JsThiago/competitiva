<?php

/*
 * Complete the 'pageCount' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER p
 */

function pageCount($n, $p)
{
    $quantPage = 1;
    $n = $n - 1;
    if ($n % 2 !== 0) {
        $quantPage = $quantPage + ceil($n / 2);
    } else {
        $quantPage = $n / 2 + 1;
    }

    $pagePosition = ceil($p / 2);
    if ($p % 2 === 0) {
        $pagePosition++;
    }
    if ($quantPage - $pagePosition < $pagePosition) {
        return ($quantPage - $pagePosition);
    }
    return $pagePosition - 1;
}


$n = 5;

$p = 4;

$result = pageCount($n, $p);

print($result);
