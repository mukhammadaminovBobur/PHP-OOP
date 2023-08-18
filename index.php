<?php

//inheritance
//extends
//parent - child
//overriding
//final can not extend class or can not override method

class  Car{
    public $model;
    public $year;


    public function __construct($model, $year)
    {
        $this->model = $model;
        $this->year = $year;
    }

    public function drive()
    {
        return "driving";
    }

}

class ElectricCar extends Car{
    public $battery;

    public function charge()
    {
        return "chrging";
    }

    public function drive()
    {
        return "electric driving";
    }
}

class RaceCar extends Car{

}

class PublicCar extends Car{

}

$tesla = new ElectricCar("Tesla", 2022);


var_dump($tesla->drive());