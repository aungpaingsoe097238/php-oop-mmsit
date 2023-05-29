<?php

abstract class A 
{
    public $a = "a";
    public function aa ()
    {
        return "aa";
    }
    abstract function x();
}

class B extends A 
{
    public function x()
    {
        return "x";
    }
}

$b = new B;
print_r($b);