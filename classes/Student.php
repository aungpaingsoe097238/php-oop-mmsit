<?php 

class Student 
{
    public $name, $gender, $birthYear, $namePrefix, $age;

    function __construct($name, $gender, $birthYear)
    {   
        $this->name = $name;
        $this->gender = $gender;
        $this->birthYear = $birthYear;
        $this->namePrefix = $this->gender === "male" ? 'Mr. ' : 'Ms.';
        $this->age = date('Y') - $this->birthYear;
    }

    public function showFullName()
    {
        return "$this->namePrefix$this->name \n";
    }

    public function intro()
    {
        return "My name is $this->namePrefix$this->name and age is $this->age year".($this->age > 1 ? 's' : '' )." old \n";
    }

}