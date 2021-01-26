<?php

// Complete the staircase function below.
function staircase($n) {
  for($i=1;$i<=$n;$i++){
    for($k=$n-$i;$k>0;$k--){
        print(' ');
    }   
    for($j=1;$j<$i+1;$j++){
            print("#");

        }
        print("\n");
    }
}
$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

staircase($n);

fclose($stdin);
