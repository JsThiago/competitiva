<?php
class Solution {

    /**
     * @param Integer $numRows
     * @return Integer[][]
     */
    function generate($numRows) {
        if($numRows === 1){
            return [[1]];
        }
        if($numRows === 2){
            return [[1,1]];
        }
        $pascal = [[]];
        for($i=0;$i<$numRows-1;$i++){
            if($i===0 || $i === 1){
                $pascal[$i][0] = 1;
                $pascal[$i][$i] = 1;
            }else{
                array_unshift($pascal[$i],1);
                array_push($pascal[$i],1);

            }
            
            for($j=$i;$j>0;$j--){
                $pascal[$i+1][$j] = $pascal[$i][$j] + $pascal[$i][$j - 1]; 
            }
           
        }
        array_unshift($pascal[$i],1);
        array_push($pascal[$i],1);

        return $pascal;
    }
}

$solution = new Solution();
print_r($solution->generate(20));