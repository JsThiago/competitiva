<?php
// Complete the compareTriplets function below.

function compareTriplets($a, $b) {
    $points = [];
    $points[0] = 0;
    $points[1] = 0;
    for($i = 0; $i<3;$i++){
        if($a[$i] > $b[$i]){
            $points[0]++;
        }
        else if($a[$i] < $b[$i]){
            $points[1]++;
        }
        
    }
    return $points;

}

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$b_temp = rtrim(fgets(STDIN));

$b = array_map('intval', preg_split('/ /', $b_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = compareTriplets($a, $b);

printf("%d %d",$result[0],$result[1]);
