<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortArrayByParity($nums) {
        $n = count($nums);
        $result = [];
        for($i=0;$i<$n/2;$i++){
            if((int)$nums[$i] % 2 !== 0) array_push($result,$nums[$i]);
            else array_unshift($result,$nums[$i]);
            if($n-$i-1 < 0 || $n-$i-1 === $i) continue;
            if((int)$nums[$n-$i-1] % 2 !== 0) array_push($result,$nums[$n-$i-1]);
            else array_unshift($result,$nums[$n-$i-1]);
        }
        return $result;
    }
}

$solution = new Solution();
print_r($solution->sortArrayByParity([0]));
