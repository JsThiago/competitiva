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
    public $queue = [];
    public $actualHeight = 0;
    public function getHeight($root)
    {

        if ($root === null) {
            return 0;
        }
        $this->queue[$this->actualHeight][] = $root->data;
        $this->actualHeight++;
        $this->getHeight($root->left);
        $this->getHeight($root->right);

        $this->actualHeight = $this->actualHeight - 1;
    }
    public function levelOrder($root)
    {
        $this->getHeight($root);
        for ($i = 0; $i < count($this->queue); $i++) {
            for ($j = 0; $j < count($this->queue[$i]); $j++) {
                print($this->queue[$i][$j] . " ");
            }
        }
    }
} //End of Solution
$myTree = new Solution();
$root = null;
$T = intval(fgets(STDIN));
while ($T-- > 0) {
    $data = intval(fgets(STDIN));
    $root = $myTree->insert($root, $data);
}
$myTree->levelOrder($root);
