<?php
$sequences = [[]];
function findSum($vector, $value)
{
    for ($i = 0; $i < count($vector); $i++) {
        $sum = $vector[$i];
        $aux = [$vector[$i]];
        for ($j = 0; $j < count($vector); $j++) {
            if ($i !== $j) {
                $sum = $sum + $vector[$j];
                $aux[] = $vector[$j];
            }
            if ($sum === $value) {
                $sequences[] = $aux;
            }
            if ($sum > $value) {
                findSum($vector, $value);
            }
        }
    }
}




$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$vetor = [2, 3, 4, 5, 6, 5];
findSum($vetor, 10);
