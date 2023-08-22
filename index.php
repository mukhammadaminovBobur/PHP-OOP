<?php

//Abstract Classes

abstract class  Car1{
    public $model;
    protected $year;
    private $km;


    public function __construct($model, $year, $km)
    {
        $this->model = $model;
        $this->year = $year;
        $this->km = $km;
    }

    //abstract function body will be empty
    //abstract function must be created in child class
    //public = public, protected = protected/public
    abstract public function stop();

    public function drive()
    {
        return "driving";
    }

    protected function reverse()
    {
        return "reverse drive";
    }

    private function sell()
    {
        return "selling";
    }



}

class ElectricCar extends Car1{
    public function stop()
    {
        return "stop";
    }
}

$tesla = new ElectricCar("Testla", 2023, 64000);

var_dump($tesla);
