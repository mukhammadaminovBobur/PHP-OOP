<?php

//Static Methods and Property

class Dog1{
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

echo Dog1::$weight;
