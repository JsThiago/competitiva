c<?php

// Complete the miniMaxSum function below.
function miniMaxSum($arr) {
    $sum = 0;
    $min = $arr[0];
    $max = $arr[0];
    for($i=0;$i<count($arr);$i++){
        if($arr[$i]>$max){
            $max = $arr[$i];
        }
        if($arr[$i]<$min){
            $min = $arr[$i];
        }
        $sum = $sum+$arr[$i];
    }
    $maxSum = $sum - $min;
    $minSum = $sum - $max;
    printf("%d %d",$minSum,$maxSum);
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

fclose($stdin);
