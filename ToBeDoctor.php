<?php 

abstract class ParentClass
{
    abstract function toBeADoctor();
}

class ChildClass extends ParentClass
{
    public function toBeADoctor()
    {
        $first  = "success metriculation exam";
        $second = "join medical university";
        $third  = "gradulate with MBBS";
        return "I will be a doctor"; 
    }
}

$child = new ChildClass;
print_r($child->toBeADoctor());