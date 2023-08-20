<?php

class Dog{
    public $name;
    public static $weight = 25;

    public function bark()
    {
        return self::eat();
    }

    public static function eat()
    {
        return "eating";
    }

}