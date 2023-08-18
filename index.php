<?php

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

    public function getFuel()
    {
        return "fueling";
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

}


$bmw = new Car("BMW", "2019");
$audi = new Car("Audi", "2023");

echo $audi->drive();