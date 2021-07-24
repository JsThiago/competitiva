<?php
class Solution {
    /**
     * @param Integer[] $nums
     */
    public $originalArray = [];
    function __construct($nums) {
        $this->originalArray = $nums[0][0];
    }
  
    /**
     * Resets the array to its original configuration and return it.
     * @return Integer[]
     */
    function reset() {
        return $this->originalArray;
        
    }
  
    /**
     * Returns a random shuffling of the array.
     * @return Integer[]
     */
    function shuffle() {
        $indexes = range(0,count($this->originalArray)-1);
        $indexes = array_reverse($indexes);
        $shuffled = [];
        for($i=0;$i<count($this->originalArray);$i++){
            $newIndex = rand(0,count($indexes)-1);
            $shuffled[$i] = $this->originalArray[$indexes[$newIndex]];
            array_splice($indexes,$newIndex,1);
        }
        return $shuffled;
    }
   
}


//Your Solution object will be instantiated and called as such:
 $obj = new Solution([[[1, 2, 3]], [], [], []]);
 $ret_1 = $obj->reset();
 $ret_2 = $obj->shuffle();
