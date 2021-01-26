<?php
class Difference
{
    private $elements = array();
    public $maximumDifference;

    public function __construct($elements)
    {
        $this->elements = $elements;
    }

    public function ComputeDifference()
    {
        $ma = 0;
        $me = 0;
        for ($i = 0; $i < count($this->elements); $i++) {
            if ($this->elements[$i] > $this->elements[$ma]) {
                $ma = $i;
            }
            if (
                $this->elements[$i] < $this->elements[$me]
            ) {
                $me = $i;
            }
        }
        echo abs($this->elements[$ma] - $this->elements[$me]);
        //array_splice($this->elements, $ma, 1);
    }
} //End of Difference class  


$N = intval(fgets(STDIN));
$a = array_map('intval', explode(' ', fgets(STDIN)));
$d = new Difference($a);
$d->ComputeDifference();
print($d->maximumDifference);
