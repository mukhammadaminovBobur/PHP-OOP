<?php

//Traits
trait AnimarTrait{
    public function eat()
    {
        return "eating meat and fat";
    }

    public function sleep()
    {
        return "sleeping";
    }
}
trait  Walking{
    public function walking()
    {
        return "walking";
    }
}

interface Animal
{
    public function makeSound();

}

class Dog implements Animal
{
    use AnimarTrait;
    public function makeSound()
    {
        return "woof woof";
    }
}

class Cat implements Animal
{
    use AnimarTrait;
    public function makeSound()
    {
        return "Meow meow";
    }

}

class Kitten extends Cat{
    use AnimarTrait, Walking;
}