<?php

// Complete the minimumBribes function below.
function minimumBribes($q)
{
    $i = count($q) - 1;
    $j = 0;
    $count = 0;
    while ($i >= 0) {
        $position = $i;
        if (abs($q[$i] - $position) > 2) {
            print("Too chaotic\n");
            return 0;
        }
        if ($q[$i] - $position > 0) {
            $count += abs($q[$i] - $position);
            array_splice($q,  $q[$i], 0, $q[$i]);

            array_splice($q, $i, 1);
        } else {
            $i--;
        }
    }

    print($count . "\n");
}

//$stdin = fopen("php://stdin", "r");

//fscanf($stdin, "%d\n", $t);

//for ($t_itr = 0; $t_itr < $t; $t_itr++) {
// fscanf($stdin, "%d\n", $n);

//fscanf($stdin, "%[^\n]", $q_temp);

//$q = array_map('intval', preg_split('/ /', $q_temp, -1, PREG_SPLIT_NO_EMPTY));

//minimumBribes($q);
//}
minimumBribes([1, 2, 5, 3, 7, 8, 6, 4]);

//close($stdin);
