<?php

//Access modifiers

//public
//protected
//private

class  Car{
    public $model;
    protected $year;
    private $km;


    public function __construct($model, $year, $km)
    {
        $this->model = $model;
        $this->year = $year;
        $this->km = $km;
    }

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

class ElectricCar extends Car{
    public $km;
    public function getYear()
    {
        return $this->year;
    }

    public function getKm()
    {
        return $this->km;
    }

    public function getReverse()
    {
        return $this->reverse();
    }
}

$chevy = new Car("Chevrolet", 2023, 15000);
$tesla = new ElectricCar("Testla", 2023, 64000);
$tesla->km = 65000;


echo $tesla->getReverse();
