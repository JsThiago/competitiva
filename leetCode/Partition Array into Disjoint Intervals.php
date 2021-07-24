<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function partitionDisjoint($nums) {
        $m = count($nums);
        $max_index = 0;
        $min_index = 0;
        for($i = 1; $i < $m; $i++){
            if($nums[$i] >= $nums[$max_index]){
                $max_index = $i;
            }
            if($nums[$i] <= $nums[$min_index]){
                $min_index = $i;
            }
        }
        if($max_index === $min_index){
            return 1;
        }
        $aux = [];
        $bigger = true;
        if($min_index > $max_index){
            $aux_max = array_slice($nums,$max_index,$m);
            $aux_min = array_slice($nums,$min_index,$m);
            $bigger = false;
        }else{
            $aux_max = array_slice($nums,0,$max_index);
            $aux_min = array_slice($nums,0,$min_index);
        }
        $max = max($aux_max);
        $max_min = max($aux_min);
        print_r($aux_min);
        print_r($aux_max);
        $left = count($aux_max);
        if($bigger){
           
            for($i=$max_index-1;$i>$min_index;$i--){
                
                if($nums[$i] === $max && $nums[$i] > $max_min){
                    $left--;
                    array_pop($aux_max);
                    $max = max($aux_max);
                    continue;
                }
                if($nums[$i]<$max && $nums[$i] < $max_min){
                    break;
                }
                $left--;
                array_pop($aux_max);
                $max = max($aux_max);
            }
        }
        else{
            for($i=$max_index-1;$i<$min_index;$i++){
                
                if($nums[$i] === $max && $nums[$i] > $max_min){
                    $left--;
                    array_pop($aux_max);
                    $max = max($aux_max);
                    continue;
                }
                if($nums[$i]<$max && $nums[$i] < $max_min){
                    break;
                }
                $left--;
                array_pop($aux_max);
                $max = max($aux_max);
            }
        }
        print_r($left+1);
        return $left;
    }
}
//                          [5,0,3,8,6]
$Solution = new Solution([5,0,3,8,6]);
//print_r($Solution->partitionDisjoint([90,47,69,10,43,92,31,73,61,97]));
//print_r($Solution->partitionDisjoint([5,0,3,8,6]));
//print_r($Solution->partitionDisjoint([1,1,1,0,6,12]));
//print_r($Solution->partitionDisjoint([32,57,24,19,0,24,49,67,87,87]));
//print_r($Solution->partitionDisjoint([29,33,6,4,42,0,10,22,62,16,46,75,100,67,70,74,87,69,73,88]));
print_r($Solution->partitionDisjoint([81,27,39,71,54,88,85,90,93,93]));