<?php

// Complete the rotLeft function below.
function rotLeft($a, $d)
{
    $aux = [];
    $result = [];
    for ($i = 0; $i < count($a); $i++) {
        if ($i - $d < 0) {
            $aux[$i - $d + count($a)] = $a[$i];
        } else {
            $aux[$i - $d] = $a[$i];
        }
    }
    print_r($result[0]);
    for ($i = 0; $i < count($a); $i++) {
        $result[$i] = $aux[$i];
    }
    return $result;
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nd_temp);
$nd = explode(' ', $nd_temp);

$n = intval($nd[0]);

$d = intval($nd[1]);

fscanf($stdin, "%[^\n]", $a_temp);

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = rotLeft($a, $d);

//fwrite($fptr, implode(" ", $result) . "\n");

fclose($stdin);
//fclose($fptr);
