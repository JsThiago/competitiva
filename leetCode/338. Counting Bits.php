<?php
class Solution {


    function binary($i,$count,$dp){
        if($i < 1){
            return $count;
        }
        if(isset($dp[$i])){
            $count += $dp[$i];
            return $count;
        }
        $count += $i % 2;
        return $this->binary($i/2,$count,$dp);
    }
 
    function countBits($n) {
        $dp = [];
        $result = [];
        for($j=0;$j<=$n;$j++){
            $i = $j;
           $result[$j] = $this->binary($i,0,$dp);
        }
        print_r($result);
    }
}

$solution = new Solution();
$solution->countBits(5);