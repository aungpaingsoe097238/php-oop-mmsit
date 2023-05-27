<?php 

class StaticMethod 
{
    public static $a = "a static property";

    public static function b()
    {
        return "this is b static function";
    }

    public static function c()
    {
        return self::$a . self::b();
    }
}