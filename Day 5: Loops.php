<?php



$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

for ($i = 1; $i <= 10; $i++) {
    $dot = $n * $i;
    print("$n x $i = $dot\n");
}


fclose($stdin);
