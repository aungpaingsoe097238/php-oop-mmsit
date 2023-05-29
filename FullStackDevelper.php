<?php 

trait FrontendField
{
    public $frontendDesignField = "Figma";
    public $frontendDevelopmentField = ["Html","Css","Js","API"];

    public function prototypeOnfigma()
    {
        return "Front end Design can create with figma";
    }

}

trait BackEndField
{
    public $systemDesign = "Understanding the requirements of system";
    public $dataBase = "mySql";
    public $backendLanguage = "PHP";
}

class FullStackDeveloper 
{
    use FrontendField,BackEndField;
}

$me = new FullStackDeveloper;
print_r($me);