<?php

// Complete the plusMinus function below.
function plusMinus($arr) {
    $sum = [0,0,0];
    for($i=0;$i<count($arr);$i++){
        if($arr[$i]>0){
            $sum[0]++;
        }
        if($arr[$i]<0){
            $sum[1]++;
        }
        if($arr[$i]==0){
            $sum[2]++;
        }

    }   
    printf("%f",$sum[0]/count($arr));
    printf("%f",$sum[1]/count($arr));
    printf("%f",$sum[2]/count($arr));    
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);

fclose($stdin);
