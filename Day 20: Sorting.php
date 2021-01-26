<?php

function swap(&$a, &$b)
{
    $aux = $a;
    $a = $b;
    $b = $aux;
}


function bubbleSort($a)
{
    $totalSwaps = 0;
    for ($i = 0; $i < count($a); $i++) {
        // Track number of elements swapped during a single array traversal
        $numberOfSwaps = 0;

        for ($j = 0; $j < count($a) - 1; $j++) {
            // Swap adjacent elements if they are in decreasing order
            if ($a[$j] > $a[$j + 1]) {
                swap($a[$j], $a[$j + 1]);
                $numberOfSwaps++;
            }
        }
        $totalSwaps += $numberOfSwaps;

        // If no elements were swapped during a traversal, array is sorted
        if ($numberOfSwaps == 0) {
            break;
        }
    }
    return [$totalSwaps, $a[0], $a[count($a) - 1]];
}




$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $n);
$a_temp = fgets($handle);
$a = explode(" ", $a_temp);
$a = array_map('intval', $a);
print("Array is sorted in " . bubbleSort($a)[0] . " swaps.\n");
print("First Element: " . bubbleSort($a)[1] . "\n");
print("Last Element: " . bubbleSort($a)[2]);
// Write Your Code Here
