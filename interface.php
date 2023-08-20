<?php
//Interface / implements
//functions in interface must be created in child
interface Animal{
    public function makeSound();
    public function eat();
}

class Dog3 implements Animal{
    public function makeSound()
    {
        return "woof woof";
    }

    public function eat()
    {
        return "eating meat";
    }
}

class Cat implements Animal{
    public function makeSound()
    {
        return "Meow meow";
    }

    public function eat()
    {
        return "eating cat food";
    }
}