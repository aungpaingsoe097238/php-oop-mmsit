<?php 

interface A 
{
    public function a();
}

interface B 
{
    public function a();
}

interface C
{
    public function c();
}

class D implements A,B,C 
{
    public function a()
    {
        return "a";
    }

    public function b()
    {
        return "b";
    }

    public function c()
    {
        return "c";
    }
}

$d = new D;
print_r($d);