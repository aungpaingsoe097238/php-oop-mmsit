<?php 

class Person 
{
    public $skinColor;
    public $apperence;

    protected $money;
    protected $gfName;

    private $fbPassword;

    public function walk()
    {
        return "can walk";
    }

    public function talk()
    {
        return "can talk";
    }

    protected function teach()
    {
        return "can teach";
    }

    protected function learn()
    {
        return "can learn";
    }

    private function saving()
    {
        return "save money";
    }

    private function flirt()
    {
        return ".....";
    }

}