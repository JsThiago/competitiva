<?php
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
