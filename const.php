<?php

//Constants

class MyDog{
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

echo MyDog::$weight;
echo MyDog::NAME;
