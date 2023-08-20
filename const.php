<?php

//Constants

class Dog{
    public $name;
    public static $weight = 25;

    const NAME = "Bobur";

    public function getName()
    {
        return self::NAME;
    }

    public function bark()
    {
        return self::eat();
    }

    public static function eat()
    {
        return "eating";
    }

}

echo Dog::$weight;
echo Dog::NAME;
