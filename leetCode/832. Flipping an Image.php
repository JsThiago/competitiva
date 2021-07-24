<?php
class Solution {

    function swap($array,$i,$j,$n)
    {
        $aux = $array[$i][$j];
        $array[$i][$j] = $array[$i][$n-$j];
        $array[$i][$n-$j] = $aux;
        return $array;
        
    }
    function invert($array,$i,$j){
        if($array[$i][$j] === 1){
            $array[$i][$j] = 0;
        }else{
            $array[$i][$j] = 1;
        }
        return $array;
    }

    function flipAndInvertImage($image) {
        
        $n = count($image)-1;
        for($i=0;$i<=$n/2;$i++){
            for($j=0;$j<=$n/2;$j++){
                if($j === $n/2){
                    $image = $this->invert($image,$i,$j);
                    
                }else{
                    $image = $this->swap($image,$i,$j,$n);
                    $image = $this->invert($image,$i,$j);
                    $image = $this->invert($image,$i,$n-$j);
                }
                if($n-$i === $i) continue;
                if($j === $n/2){
                    $image = $this->invert($image,$n-$i,$j);
                }
                $image = $this->swap($image,$n-$i,$j,$n);
                $image = $this->invert($image,$n-$i,$j);
                $image = $this->invert($image,$n-$i,$n-$j);

                
                
                
            }

        }
        print_r($image);
    }
}

$solution = new Solution();
$solution->flipAndInvertImage([[1,1,0],[1,0,1],[0,0,0]]);
