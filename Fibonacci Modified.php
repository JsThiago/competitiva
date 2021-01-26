<?php

// Complete the fibonacciModified function below.
function fibonacciModified($t1, $t2, $n) {
            $t3 = $t1 + pow($t2,2);
            echo "t3:$t3\n" ;   
            if($n==1){
                return $t3;
            }
    
        return fibonacciModified($t2,$t3,$n-1);


}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $t1T2n_temp);
$t1T2n = explode(' ', $t1T2n_temp);

$t1 = intval($t1T2n[0]);

$t2 = intval($t1T2n[1]);

$n = intval($t1T2n[2]);

$result = fibonacciModified($t1, $t2, $n-2);

print($result);

fclose($stdin);
