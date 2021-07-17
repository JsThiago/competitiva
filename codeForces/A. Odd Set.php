<?php
function oddSet($n2){
    $countOdd = 0;
    $countEven = 0;
    for($i=0;$i<count($n2);$i++){
        if($n2[$i] % 2 === 0){
            $countEven += 1;
            continue;
        }
        $countOdd += 1;
    } 
    if($countOdd === $countEven){
        return "Yes\n";
    }
    return "No\n";
}


$t = readline();
$i = 0;
while($i<$t){
    $n = readline();
    $n2 = readline();
    $n2 = explode(" ",$n2);
    print_r(oddSet($n2));
    $i++;
}



