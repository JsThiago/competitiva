<?php

/**
 * @param Integer[][] $grid
 * @param Integer $k
 * @return Integer
 */
// 0,0 = 1
// 0,1 = 2
// 1,0 = 4
// //1,1 = 9
// 2,0 = 5
// 2,1 = 6
// 0,2 = 6
// 1,1 = 7
// //1,2 = 9
// 2,2 = 7
// 1,2 = 8
function minPathSum($grid) {
    if(count($grid) === 1 && count($grid[0]) === 1){
        return $grid[0][0];
    }
    $MDiff = [[]]; 
    $m=count($grid[0]);
    $n=count($grid);
     for($i = 0; $i<$n;$i++){
         for($j=0;$j<$m;$j++){
             $MDiff[$i][$j] = INF;
         }
     } 
    
    for($i = 0; $i<$n;$i++){
         for($j=0;$j<$m;$j++){
            if($i===0 && $j === 0){
                $MDiff[$i][$j] = $grid[$i][$j];
            }
            if($i+1<$n){
                $down = (int)$grid[$i+1][$j] + $MDiff[$i][$j];
                if($down < $MDiff[$i+1][$j]){
                    $MDiff[$i+1][$j] = $down;
                }
            }
            if($j+1<$m){
                $right = (int)$grid[$i][$j+1] + $MDiff[$i][$j];
                if($right < $MDiff[$i][$j+1]){
                    $MDiff[$i][$j+1] = $right;
                }
            }
          
           print($MDiff[$i][$j]." "); 
         } 
         print("\n");
     }   
}
$grid = [[9,1,4,8]];

print_r(minPathSum($grid,0,0,0));

