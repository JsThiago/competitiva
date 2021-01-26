<?php

/*
 * Complete the timeConversion function below.
 */
function timeConversion($s) {
    $date = explode(":",$s);
    $hours = $date[0];      
    $minutes = $date[1];
    if(strpos($date[2],"PM")){
        
        $hours = $date[0] !== "12" ? intval($date[0]+12) : "12";
    }
    if(strpos($date[2],"AM") && $date[0]=="12"){
        $hours = "00";
    }
    $seconds = substr($date[2],0,2);
    print("$hours:$minutes:$seconds");
}


$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%[^\n]", $s);

$result = timeConversion($s);

print($result);
