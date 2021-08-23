<?php
class Solution {

    /**
     * @param String $s
     * @return Integer[]
     */
    function partitionLabels($s) {
        $hash = [];
        for($i=0;$i<strlen($s);$i++){
            if(!isset($hash[$s[$i]])) $hash[$s[$i]] = [$i,$i];
            if($i > $hash[$s[$i]][1]) $hash[$s[$i]][1] = $i;
        }
        $result = [];
        $menor = $hash[$s[0]][0];
        $maior = $hash[$s[0]][1];
        $t= 0;
        for($i=1;$i<=strlen($s);$i++){
            if(!isset($hash[$s[$i]]) && $maior === $menor){
                $result[$t] = 1;
            }
            if($hash[$s[$i]][0] >= $maior || $i === strlen($s)){
                $result[$t] = abs($menor-$maior) + 1;
                $t++;
                $menor = $hash[$s[$i]][0];
                $maior = $hash[$s[$i]][1];

            }
            if($hash[$s[$i]][1] >= $maior){
                $maior = $hash[$s[$i]][1];
            }
        }
        // print_r($hash);
        return ($result);
        // print_r($result);
    }
}
$Solution = new Solution();
$Solution->partitionLabels("ababcbacadefegdehijhklij");