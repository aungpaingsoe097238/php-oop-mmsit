<?php 

class Fruit 
{ 

    // static methods က Class ကိုခေါ်တာနဲ့အလုပ်လုပ် 
    public static $x = 'x';
    public static $y = 'y';

    public $name;
    public $color;

    public static function z()
    {
        return "z from static function";
    }

    // public function __construct()
    // {
    //     echo "This is constructor\n";
    // }

    public function detail()
    {
        return "This fruit name is $this->name and color is $this->color \n";
    }

    // public function __destruct()
    // {
    //     echo "This is destruct method\n";
    // }

}