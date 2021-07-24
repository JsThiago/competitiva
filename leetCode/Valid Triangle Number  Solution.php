<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function triangleNumber($nums) {
        $sum = [];
        $sub1 = [[]];
        $sub2 = [[]];
        for($i=0;$i<count($nums);$i++){
            for($j=$i;$j<count($nums);$j++){
                $sum[(int)$nums[$i]+(int)$nums[$j]] = [$i,$j];
                $sub1[$i][$j] = (int)$nums[$i]-(int)$nums[$j];
                $sub2[$i][$j] = (int)$nums[$j]-(int)$nums[$i];
            }
        }
        $keysSum = array_keys($sum);
        for($i=0;$i<count($nums);$i++){
            $greater = array_filter($keysSum,function($var) use ($nums[$i]){

            });
        }
        
    }
}