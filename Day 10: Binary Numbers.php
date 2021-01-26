<?php



$stdin = fopen("php://stdin", "r");
$n = intval(readline());
//fscanf($stdin, "%d\n", $n);
$ones = 0;
$onesCont = 0;
while ($n !== 0) {
    if ($n % 2 === 0) {
        if ($onesCont > $ones) {
            $ones = $onesCont;
        }
        $onesCont = 0;
    } else {
        $onesCont++;
    }
    $n = intval($n / 2);
}
if ($onesCont > $ones) {
    $ones = $onesCont;
}
print($ones);
fclose($stdin);
