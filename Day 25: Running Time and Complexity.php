<?php
function isPrime($num)
{
    if ($num <= 1) {
        print("Not prime\n");
        return 0;
    }
    $count = 0;
    for ($i = 1; $i <= ceil(sqrt($num)); $i++) {
        if ($num % $i === 0) {
            $count++;
        }
        if ($count > 1) {
            print("Not prime\n");
            return 0;
        }
    }
    print("Prime\n");
    return 0;
}


$_fp = fopen("php://stdin", "r");
$n = readline();
$i = 0;
while ($i < $n) {
    $num = readline();
    isPrime($num);
    $i++;
}
