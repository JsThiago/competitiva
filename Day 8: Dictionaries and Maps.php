<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$n = readline();
$dic = [];
for ($i = 0; $i < $n; $i++) {
    $val = explode(" ", readline());
    $dic[trim($val[0])] = trim($val[1]);
}
while ($line = readline()) {
    if (isset($dic[$line])) {
        print("$line=" . $dic[$line] . "\n");
    } else {
        print("Not found\n");
    }
}
