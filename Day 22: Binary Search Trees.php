<?php
class Node
{
    public $left, $right;
    public $data;
    function __construct($data)
    {
        $this->left = $this->right = null;
        $this->data = $data;
    }
}
class Solution
{
    public $maxHeight = 0;
    public $rightCount = 0;
    public $leftCount = 0;
    public $actualHeight = 0;
    public function insert($root, $data)
    {
        if ($root == null) {
            return new Node($data);
        } else {
            if ($data <= $root->data) {
                $cur = $this->insert($root->left, $data);
                $root->left = $cur;
            } else {
                $cur = $this->insert($root->right, $data);
                $root->right = $cur;
            }
            return $root;
        }
    }

    public function getHeight($root)
    {

        if ($root === null) {
            if ($this->actualHeight > $this->maxHeight) {
                $this->maxHeight = $this->actualHeight;
            }
            return 0;
        }
        $this->actualHeight++;
        $this->getHeight($root->right);
        $this->getHeight($root->left);
        $this->actualHeight = $this->actualHeight - 1;


        return $this->maxHeight - 1;
    }
} //End of Solution
$myTree = new Solution();
$root = null;
$T = intval(fgets(STDIN));
while ($T-- > 0) {
    $data = intval(fgets(STDIN));
    $root = $myTree->insert($root, $data);
}
$height = $myTree->getHeight($root);
echo $height;
