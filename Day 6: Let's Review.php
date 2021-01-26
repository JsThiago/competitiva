<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$i = 0;
$n = readline();
while ($i < $n) {
    $str = readline();
    $even = "";
    $odd = "";
    for ($j = 0; $j < strlen($str); $j++) {
        if ($j % 2 === 0) {
            $even = "$even$str[$j]";
        } else {
            $odd = "$odd$str[$j]";
        }
    }
    printf("%s %s", $even, $odd);
    $i++;
}
