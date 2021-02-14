<?php

// Complete the birthday function below.
function birthday($s, $d, $m)
{
    $count = $m - 1;
    $sum = 0;
    $result = 0;
    if (count($s) === 1 && $m === 1) {
        if ($d === $s[0]) {
            return 1;
        }
        return 0;
    }
    for ($i = 0; $i < $m; $i++) {
        $sum += $s[$i];
    }
    for ($i = 1; $i < count($s); $i++) {
        if ($sum === $d) {
            $result++;
        }
        $count += 1;

        if (count($s) === $count) {
            break;
        }
        $sum = $sum - $s[$i - 1] + $s[$count];
    }

    return $result;
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

#$n = intval(trim(fgets(STDIN)));

#$s_temp = rtrim(fgets(STDIN));

#$s = array_map('intval', preg_split('/ /', $s_temp, -1, PREG_SPLIT_NO_EMPTY));

#$dm = explode(' ', rtrim(fgets(STDIN)));

#$d = intval($dm[0]);

#$m = intval($dm[1]);

$result = birthday([2, 5, 1, 3, 4, 4, 3, 5, 1, 1, 2, 1, 4, 1, 3, 3, 4, 2, 1], 18, 7);

//fwrite($fptr, $result . "\n");

print($result);

#fclose($fptr);
