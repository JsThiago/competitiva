<?php
class Solution {

    /**
     * @param String $s
     * @return Integer[]
     */
    function diStringMatch($s) {
        $n = strlen($s) + 1;
        
        $aux = [];
        for($i=0;$i<$n;$i++){
            $aux[$i] = $i;
        }
       
        $result = [];
        $i = 0;
        $j = $n-1;
        $t = 0;
        while($t<$n){
            if($i === $j){
                $result[$t] = $aux[$i];
                break;
            }
            if($s[$t] === "I"){
                $result[$t] = $aux[$i];
                $i++;
            }else{
                $result[$t] = $aux[$j];
                $j--;
            }
            $t++;
            
        }
        return ($result);


    }
}
$solution = new Solution();
$solution->diStringMatch("IDID");