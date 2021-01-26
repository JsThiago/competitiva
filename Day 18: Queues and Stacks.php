<?php

class Stack
{
    public $arr = [];
    public function add($value)
    {
        array_unshift($this->arr, $value);
    }
    public function remove()
    {
        return array_shift($this->arr);
    }
}
class Queue
{
    public $arr = [];
    public function add($value)
    {
        array_push($this->arr, $value);
    }
    public function remove()
    {
        return array_shift($this->arr);
    }
}




class Solution
{
    public $stack;
    public $queue;
    public function __construct()
    {
        $this->stack = new Stack();
        $this->queue = new Queue();
    }
    public function pushCharacter($s)
    {
        $this->stack->add($s);
    }
    public function enqueueCharacter($s)
    {
        $this->queue->add($s);
    }
    public function popCharacter()
    {
        return $this->stack->remove();
    }
    public function dequeueCharacter()
    {
        return $this->queue->remove();
    }
}

// read the string s
$s = fgets(STDIN);

// create the Solution class object p
$obj = new Solution();

$len = strlen($s);
$isPalindrome = true;

// push/enqueue all the characters of string s to stack
for ($i = 0; $i < $len; $i++) {
    $obj->pushCharacter($s{
        $i});
    $obj->enqueueCharacter($s{
        $i});
}

/*
pop the top character from stack
dequeue the first character from queue
compare both the characters
*/
for ($i = 0; $i < $len / 2; $i++) {
    if ($obj->popCharacter() != $obj->dequeueCharacter()) {
        $isPalindrome = false;

        break;
    }
}

//finally print whether string s is palindrome or not.
if ($isPalindrome)
    echo "The word, " . $s . ", is a palindrome.";
else
    echo "The word, " . $s . ", is not a palindrome.";
