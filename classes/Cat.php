<?php


class Cat
{

    public $name;

    //object to string / with echo
    public function __toString()
    {
        return $this->name;
    }

    //works when cloning
    public function __clone()
    {
        echo 'object is cloning<br>';
    }

}