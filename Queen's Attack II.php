<?php

// Complete the queensAttack function below.

function movesCalculation($c_q, $r_q, $c1, $r1, $isDiagonal)
{
    $result = pow(abs($r_q) - abs($r1), 2) + pow(abs($c_q) - abs($c1), 2);
    $result = sqrt($result);
    if ($isDiagonal) {
        //print($result / sqrt(2) - 1);
        //print("\n");
        return $result / sqrt(2) - 1;
    }
    return $result - 1;
}


function queensAttack($n, $k, $r_q, $c_q, $obstacles)
{

    $moves = 0;
    //print_r($obstacles);
    if (count($obstacles[0]) === 0) {
        if (abs($r_q - 1) > abs($c_q - $n)) {
            $lastC = $n;
            $lastR = abs($c_q - $n) - $r_q;
            $moves += movesCalculation($c_q, $r_q, $lastC, $lastR, true) + 1;
        } else if (abs($r_q - 1) <= abs($c_q - $n)) {
            $lastR = 1;
            $lastC = abs($r_q - 1) + $c_q;
            $moves += movesCalculation($c_q, $r_q, $lastC, $lastR, true) + 1;
        }
    } else {
        $moves += movesCalculation($c_q, $r_q, $obstacles[0][1], $obstacles[0][0], true);
    }
    if (count($obstacles[1]) === 0) {
        if (abs($r_q - $n) <= abs($c_q - 1)) {
            $lastC = abs($r_q - $n) - $c_q;
            $lastR = $n;
            $moves += movesCalculation($c_q, $r_q, $lastC, $lastR, true) + 1;
        } else if (abs($r_q - $n) > abs($c_q - 1)) {
            $lastR = abs($c_q - 1) + $r_q;
            $lastC = 1;
            $moves += movesCalculation($c_q, $r_q, $lastC, $lastR, true) + 1;
        }
    } else {
        $moves += movesCalculation($c_q, $r_q, $obstacles[1][1], $obstacles[1][0], true);
    }
    //sdb
    if (count($obstacles[2]) === 0) {
        if (abs($r_q - 1) < abs($c_q - 1)) {
            $lastC = abs($r_q - 1) - $c_q;
            $lastR = 1;
            $moves += movesCalculation($c_q, $r_q, $lastC, $lastR, true) + 1;
        } else if (abs($r_q - 1) >= abs($c_q - 1)) { //errado
            $lastR = abs($c_q - 1) - $r_q;
            $lastC = 1;
            $moves += movesCalculation($c_q, $r_q, $lastC, $lastR, true) + 1;
        }
    } else {
        $moves += movesCalculation($c_q, $r_q, $obstacles[2][1], $obstacles[2][0], true);
    }
    if (count($obstacles[3]) === 0) {
        if (abs($r_q - $n) <= abs($c_q - $n)) {
            $lastC = abs($r_q - $n) + $c_q;
            $lastR = $n;
            $moves += movesCalculation($c_q, $r_q, $lastC, $lastR, true) + 1;
        } else if (abs($r_q - $n) > abs($c_q - $n)) {
            $lastR = abs($c_q - $n) + $r_q; //
            $lastC = $n;
            $moves += movesCalculation($c_q, $r_q, $lastC, $lastR, true) + 1;
        }
    } else {
        $moves += movesCalculation($c_q, $r_q, $obstacles[3][1], $obstacles[3][0], true);
    }
    //hr,hl,va,vb
    if (count($obstacles[4]) === 0) {
        $moves += abs($c_q - $n);
    } else {
        $moves += abs($c_q - $obstacles[4][1]) - 1;
    }
    if (count($obstacles[5]) === 0) {
        $moves += abs($c_q - 1);
    } else {
        $moves += abs($c_q - $obstacles[5][1]) - 1;
    }
    if (count($obstacles[6]) === 0) {
        $moves += abs($r_q - 1);
    } else {
        $moves += abs($r_q - $obstacles[6][0]) - 1;
    }
    if (count($obstacles[7]) === 0) {
        $moves += abs($r_q - $n);
    } else {
        $moves += abs($r_q - $obstacles[7][0]) - 1;
    }
    return $moves;
}


$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nk_temp);
$nk = explode(' ', $nk_temp);

$n = intval($nk[0]);

$k = intval($nk[1]);

fscanf($stdin, "%[^\n]", $r_qC_q_temp);
$r_qC_q = explode(' ', $r_qC_q_temp);

$r_q = intval($r_qC_q[0]);

$c_q = intval($r_qC_q[1]);

$obstacles = [];
$debug = [
    "4 0",
    "4 4"
];
$pdb = 0;
$pda = $n + 1;
$sda = $n + 1;
$sdb = 0;
$hr = $n + 1;
$hl = 0;
$va = 0;
$vb = $n + 1;
for ($i = 0; $i < $k; $i++) {
    fscanf($stdin, "%[^\n]", $obstacles_temp);

    $aux[] = array_map('intval', preg_split('/ /',  $obstacles_temp, -1, PREG_SPLIT_NO_EMPTY));

    //Main diagonal
    if ($aux[$i][0] + $aux[$i][1] === $c_q + $r_q) {
        if ($aux[$i][0] > $pdb && $aux[$i][0] < $r_q) {
            $pdb = $aux[$i][0];
            $lastDpb[0] = $aux[$i][0];
            $lastDpb[1] = $aux[$i][1];
        } else if ($aux[$i][0] < $pda && $aux[$i][0] > $r_q) {
            $pda = $aux[$i][0];
            $lastDpa[0] = $aux[$i][0];
            $lastDpa[1] = $aux[$i][1];
        }
    } else if ($aux[$i][0] - $aux[$i][1] === $r_q - $c_q) {
        if ($aux[$i][0] > $sdb && $aux[$i][0] < $r_q) {
            $sdb = $aux[$i][0];
            $lastSdb[0] = $aux[$i][0];
            $lastSdb[1] = $aux[$i][1];
        }
        if ($aux[$i][0] < $sda && $aux[$i][0] > $r_q) {
            $sda = $aux[$i][0];
            $lastSda[0] = $aux[$i][0];
            $lastSda[1] = $aux[$i][1];
        }
        //Secondary diagonal

    }

    //horizontal
    else if ($aux[$i][0] === $r_q) {
        if ($aux[$i][1] < $hr && $aux[$i][1] > $c_q) {
            $hr = $aux[$i][1];
            $lastHr[0] = $aux[$i][0];
            $lastHr[1] = $aux[$i][1];
        } else if ($aux[$i][1] > $hl && $aux[$i][1] < $c_q) {
            $hl = $aux[$i][1];
            $lastHl[0] = $aux[$i][0];
            $lastHl[1] = $aux[$i][1];
        }
    }
    //vertical
    else if ($aux[$i][1] === $c_q) {
        if ($aux[$i][0] > $va && $aux[$i][0] < $r_q) {
            $va = $aux[$i][0];
            $lastVa[0] = $aux[$i][0];
            $lastVa[1] = $aux[$i][1];
        } else if ($aux[$i][0] < $vb && $aux[$i][0] > $r_q) {
            $hl = $aux[$i][0];
            $lastVb[0] = $aux[$i][0];
            $lastVb[1] = $aux[$i][1];
        }
    }
}
$obstacles = array(
    0 => $lastDpb ?? [],
    1 => $lastDpa ?? [],
    2 => $lastSdb ?? [],
    3 => $lastSda ?? [],
    4 => $lastHr ?? [],
    5 => $lastHl ?? [],
    6 => $lastVa ?? [],
    7 => $lastVb ?? [],

);

$result = queensAttack($n, $k, $r_q, $c_q, $obstacles);

//print($result);
fwrite($fptr, $result . "\n");
fclose($stdin);
