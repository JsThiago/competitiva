



<?php


//Complexidade O(m+n) para tempo e space


class Solution {

    /**
     * @param Integer[][] $firstList
     * @param Integer[][] $secondList
     * @return Integer[][]
     */
    function intervalIntersection($firstList, $secondList) {
       $result = [];
       $i=0;
       $j = 0;
       if(count($firstList) === 0 || count($secondList) === 0) return $result;
        while($i<count($firstList) && $j<count($secondList)){
            if($firstList[$i][0] > $secondList[$j][1]){
                if($j < count($secondList)) $j++;
                continue;
            }
            if($firstList[$i][1] < $secondList[$j][0]){
                if($i < count($firstList)) $i++;
                continue;
            }
            if($firstList[$i][0] === $secondList[$j][1]){
                array_push($result,[$firstList[$i][0],$firstList[$i][0]]);
                if($j < count($firstList)) $j++;
                continue;
            }
            print_r($firstList[$i][0].$secondList[$j][1]);
            if($firstList[$i][1] === $secondList[$j][0]){
                array_push($result,[$firstList[$i][1],$firstList[$i][1]]);
                if($i < count($firstList)) $i++;
                continue;
            }
          
            array_push($result,[max($firstList[$i][0],$secondList[$j][0]),min($firstList[$i][1],$secondList[$j][1])]);
            if($firstList[$i][1] > $secondList[$j][1]){
                if($j < count($secondList)) $j++;
                continue;
            }
            if($i < count($firstList)) $i++;
       }
       return ($result); 
    }
}

$solution = new Solution();
print_r($solution->intervalIntersection([[17,20]],[[2,3],[6,8],[12,14],[19,20]]));
