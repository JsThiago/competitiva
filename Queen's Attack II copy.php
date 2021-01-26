<?php

// Complete the queensAttack function below.
function queensAttack($n, $k, $r_q, $c_q, $obstacles)
{
    $moves = 0;
    $increase = $r_q + 1;
    $decrease = $c_q - 1;
    $pad = false;
    $pbd = false;
    $sad = false;
    $sbd = false;
    $hr = false;
    $hl = false;
    $vb = false;
    $va = false;
    while (
        !$pad && !$pbd &&  !$sad && !$sbd && !$hr && !$hl && !$vb && !$va || ($increase === $n) &&
        ($increase === $n)
    ) {
        if (!$pad) {
            if ($obstacles[$decrease][$decrease] === 1) {
                $pad = true;
            } else {
                $moves++;
            }
        }
        if (!$pbd) {
            if ($obstacles[$increase][$increase] === 1) {
                $pbd = true;
            } else {
                $moves++;
            }
        }
        if (!$sad) {
            if ($obstacles[$decrease][$increase] === 1) {
                $sad = true;
            } else {
                $moves++;
            }
        }
        if (!$sbd) {
            if ($obstacles[$increase][$decrease] === 1) {
                $sbd = true;
            } else {
                $moves++;
            }
        }
        if (!$hr) {
            if ($obstacles[$decrease][$decrease] === 1) {
                $dpa = true;
            } else {
                $moves++;
            }
        }
        if (!$dpa) {
            if ($obstacles[$decrease][$decrease] === 1) {
                $dpa = true;
            } else {
                $moves++;
            }
        }
        if (!$dpa) {
            if ($obstacles[$decrease][$decrease] === 1) {
                $dpa = true;
            } else {
                $moves++;
            }
        }
        if (!$dpa) {
            if ($obstacles[$decrease][$decrease] === 1) {
                $dpa = true;
            } else {
                $moves++;
            }
        }
    }
}


$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nk_temp);
$nk = explode(' ', $nk_temp);

$n = intval($nk[0]);

$k = intval($nk[1]);

fscanf($stdin, "%[^\n]", $r_qC_q_temp);
$r_qC_q = explode(' ', $r_qC_q_temp);

$r_q = intval($r_qC_q[0]);

$c_q = intval($r_qC_q[1]);

$obstacles = array();

for ($i = 0; $i < $k; $i++) {
    fscanf($stdin, "%[^\n]", $obstacles_temp);
    $aux[] = array_map('intval', preg_split('/ /', $obstacles_temp, -1, PREG_SPLIT_NO_EMPTY));
    $obstacles[intval($aux[$i][0])][intval($aux[$i][1])] = 1;
}

$result = queensAttack($n, $k, $r_q, $c_q, $obstacles);


fclose($stdin);
