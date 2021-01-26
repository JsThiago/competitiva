<?php

/*
 * Complete the 'climbingLeaderboard' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY ranked
 *  2. INTEGER_ARRAY player
 */

function climbingLeaderboard($ranked, $player)
{
    $playerSort = $player;
    sort($playerSort);
    $playerSort = array_reverse($playerSort);
    $i = 0;
    $ranked[] = 0;
    $playerCount = 0;
    $rankedCompare = $ranked[0];
    $playerCompare = $playerSort[0];
    $points = 1;
    while ($i < count($ranked)) {
        if ($rankedCompare !== $ranked[$i]) {
            $rankedCompare = $ranked[$i];
            $points++;
        }
        if ($playerCompare >= $ranked[$i]) {
            $playerPoints[$playerCompare] = $points;
            $playerCount++;
            $playerCompare = $playerSort[$playerCount];
            if ($playerCount === count($playerSort)) {
                break;
            }
        } else {

            $i++;
        }
    }

    for ($i = 0; $i < count($player); $i++) {
        print($playerPoints[$player[$i]] . "\n");
    }
}


$ranked_count = intval(trim(fgets(STDIN)));

$ranked_temp = rtrim(fgets(STDIN));

$ranked = array_map('intval', preg_split('/ /', $ranked_temp, -1, PREG_SPLIT_NO_EMPTY));

$player_count = intval(trim(fgets(STDIN)));

$player_temp = rtrim(fgets(STDIN));

$player = array_map('intval', preg_split('/ /', $player_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = climbingLeaderboard($ranked, $player);

print($result);

fclose($fptr);
