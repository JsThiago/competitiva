<?php
// Complete the formingMagicSquare function below.
function formingMagicSquare($s)
{
    $magicMatrix1 = [[8, 3, 4], [1, 5, 9], [6, 7, 2]];
    $magicMatrix2 = [[6, 1, 8], [7, 5, 3], [2, 9, 4]];
    $magicMatrix3 = [[2, 7, 6], [9, 5, 1], [4, 3, 8]];
    $magicMatrix4 = [[4, 9, 2], [3, 5, 7], [8, 1, 6]];
    $cost1 = 0;
    $cost2 = 0;
    $cost3 = 0;
    $cost4 = 0;
    $cost5 = 0;
    $cost6 = 0;
    $cost7 = 0;
    $cost8 = 0;
    for ($i = 0; $i < 3; $i++) {
        $cost1 += abs($s[$i][0] - $magicMatrix1[$i][0]) + abs($s[$i][1]
            - $magicMatrix1[$i][1]) + abs($s[$i][2] - $magicMatrix1[$i][2]);
        $cost2 += abs($s[$i][0] - $magicMatrix2[$i][0]) + abs($s[$i][1]
            - $magicMatrix2[$i][1]) + abs($s[$i][2] - $magicMatrix2[$i][2]);
        $cost3 += abs($s[$i][0] - $magicMatrix3[$i][0]) + abs($s[$i][1]
            - $magicMatrix3[$i][1]) + abs($s[$i][2] - $magicMatrix3[$i][2]);
        $cost4 += abs($s[$i][0] - $magicMatrix4[$i][0]) + abs($s[$i][1]
            - $magicMatrix4[$i][1]) + abs($s[$i][2] - $magicMatrix4[$i][2]);
        $cost5 += abs($s[$i][2] - $magicMatrix1[$i][0]) + abs($s[$i][1]
            - $magicMatrix1[$i][1]) + abs($s[$i][0] - $magicMatrix1[$i][2]);
        $cost6 += abs($s[$i][2] - $magicMatrix2[$i][0]) + abs($s[$i][1]
            - $magicMatrix2[$i][1]) + abs($s[$i][0] - $magicMatrix2[$i][2]);
        $cost7 += abs($s[$i][2] - $magicMatrix3[$i][0]) + abs($s[$i][1]
            - $magicMatrix3[$i][1]) + abs($s[$i][0] - $magicMatrix3[$i][2]);
        $cost8 += abs($s[$i][2] - $magicMatrix4[$i][0]) + abs($s[$i][1]
            - $magicMatrix4[$i][1]) + abs($s[$i][0] - $magicMatrix4[$i][2]);
    }

    return min($cost1, $cost2, $cost3, $cost4, $cost5, $cost6, $cost7, $cost8);
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

$s = array();

for ($i = 0; $i < 3; $i++) {
    fscanf($stdin, "%[^\n]", $s_temp);
    $s[] = array_map('intval', preg_split('/ /', $s_temp, -1, PREG_SPLIT_NO_EMPTY));
}
//$s = [[4, 5, 8], [2, 4, 1], [1, 9, 7]];
$result = formingMagicSquare($s);

//fwrite($fptr, $result . "\n");

fclose($stdin);
//fclose($fptr);