<?php

class person
{
    protected $firstName, $lastName, $id;

    public function __construct($first_name, $last_name, $identification)
    {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->id = $identification;
    }

    function printPerson()
    {
        print("Name: {$this->lastName}, {$this->firstName}\n");
        print("ID: {$this->id}\n");
    }
}
class Student extends person
{
    private $testScores;

    public function __construct($first_name, $last_name, $id, $scores)
    {
        parent::__construct($first_name, $last_name, $id);
        $this->testScores = $scores;
    }




    public function calculate()
    {

        $grade = array_sum($this->testScores) / count($this->testScores);
        if ($grade <= 100 && $grade >= 90) {
            return "O";
        }
        if ($grade < 90 && $grade >= 80) {
            return "E";
        }
        if ($grade < 80 && $grade >= 70) {
            return "A";
        }
        if ($grade < 70 && $grade >= 55) {
            return "P";
        }
        if ($grade < 55 && $grade >= 40) {
            return "D";
        }
        if ($grade < 40) {
            return "T";
        }
    }
}


$file = fopen("php://stdin", "r");

$name_id = explode(' ', fgets($file));

$first_name = $name_id[0];
$last_name = $name_id[1];
$id = (int)$name_id[2];

fgets($file);

$scores = array_map(intval, explode(' ', fgets($file)));

$student = new Student($first_name, $last_name, $id, $scores);

$student->printPerson();

print("Grade: {$student->calculate()}");
