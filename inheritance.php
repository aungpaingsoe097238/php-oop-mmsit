<?php

class Animal 
{
    public $name;
    public $gender;
    public $lifeSpan = 100;

    function __construct($name,$gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }

    public function walk()
    {
        return __CLASS__." walk with 4 legs";
    }

}

class Bird extends Animal
{

    public $lifeSpan = 5;
    public $canfly;

    function __construct($name,$gender,$canfly)
    {
        parent::__construct($name,$gender);
        $this->canfly = $canfly;
    }

    public function fly()
    {
        return __CLASS__.$this->canfly;
    }

    public function walk()
    {
        print(parent::walk());
        return __CLASS__." walk with 2 legs";
    }
}

class Mammal extends Animal
{
    public function feeding()
    {
        return __CLASS__." can feed milk";
    }
}

$bird = new Bird("sawllow","male","fly");
$m = new Mammal("bb","female");
print_r($bird->fly());
print_r($bird->lifeSpan);
print_r($bird->walk());
print_r($m->feeding());