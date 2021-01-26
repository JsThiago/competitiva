<?php
$_fp = fopen("php://stdin", "r");

function compareYear($y1, $y2)
{
    if ($y1 > $y2) {
        return 1;
    } else if ($y1 < $y2) {
        return 0;
    }
    return -1;
}

function compareDay($d1, $d2)
{
    if ($d1 > $d2) {
        return 1;
    } else if ($d1 < $d2) {
        return 0;
    }
    return -1;
}


function compareMonth($m1, $m2)
{
    if ($m1 > $m2) {
        return 1;
    } else if ($m1 < $m2) {
        return 0;
    }
    return -1;
}





/* Enter your code here. Read input from STDIN. Print output to STDOUT */
list($dayReturned, $monthReturned, $yearReturned) = sscanf(readline(), "%d %d %d");
list($day, $month, $year) = sscanf(readline(), "%d %d %d");
if (compareYear($yearReturned, $year) === 1) {
    print(10000);
    return 0;
} else if (compareYear($yearReturned, $year) === 0) {
    print(0);
    return 0;
}
if (compareMonth($monthReturned, $month) === 1) {
    print(abs($month - $monthReturned) * 500);
    return 0;
} else if (compareMonth($monthReturned, $month) === 0) {
    print(0);
    return 0;
}
if (compareDay($dayReturned, $day) === 1) {
    print(abs($dayReturned - $day) * 15);
    return 0;
}
print(0);
