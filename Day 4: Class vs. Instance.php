<?php
class Person
{
    public $age;
    public function __construct($initialAge)
    {
        $this->age = $initialAge;
        if ($this->age < 0) {
            print("Age is not valid, setting age to 0.\n");
            $this->age = 0;
        }
    }
    public  function amIOld()
    {
        if ($this->age >= 13 && $this->age < 18) {
            print("You are a teenager.\n");
        } else if ($this->age < 13) {
            print("You are young.\n");
        } else {
            print("You are old.\n");
        }
    }
    public  function yearPasses()
    {
        $this->age++;
    }
}

$T = intval(fgets(STDIN));
for ($i = 0; $i < $T; $i++) {
    $age = intval(fgets(STDIN));
    $p = new Person($age);
    $p->amIOld();
    for ($j = 0; $j < 3; $j++) {
        $p->yearPasses();
    }
    $p->amIOld();
    echo "\n";
}
