<?php
class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $n = count($prices);
        $dp = $prices[0];
        $total = (int) 0;
        for($i=1;$i<$n;$i++){
            if($prices[$i] <= $dp){
                $dp = $prices[$i];
                continue;
            }
            if($prices[$i] > $dp && $i+1 === $n){
                $total = ((int)$prices[$i] - (int)$dp) + $total;
                continue;

            }
            if($prices[$i] > $dp && ($prices[$i+1] < $prices[$i] || $i+1 === $n) ){
                $total = ((int)$prices[$i] - (int)$dp) + $total;
                $dp = $prices[$i+1];

            }
            
        }
        return $total;
    }
}


$solution = new Solution();
print_r($solution->maxProfit([1,2,3,4,5]));