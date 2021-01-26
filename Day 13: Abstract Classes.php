<?php
abstract class Book
{

    protected $title;
    protected  $author;

    function __construct($t, $a)
    {
        $this->title = $t;
        $this->author = $a;
    }
    abstract protected function display();
}

class MyBook extends Book
{
    public $price;
    function __construct($title, $author, $price)
    {
        parent::__construct($title, $author);
        $this->price = $price;
    }
    function display()
    {
        print('Title: ' . $this->title);
        print('Author: ' . $this->author);
        print('Price: ' . $this->price . "\n");
    }
}

$title = fgets(STDIN);
$author = fgets(STDIN);
$price = intval(fgets(STDIN));
$novel = new MyBook($title, $author, $price);
$novel->display();
