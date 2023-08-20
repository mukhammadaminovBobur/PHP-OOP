<?php

//Static Methods and Property

class Dog{
    public $name;
    public static $weight = 25;

    public function bark()
    {
        return "woof woof";
    }

    public static function eat()
    {
        return "eating";
    }

}

echo Dog::$weight;
