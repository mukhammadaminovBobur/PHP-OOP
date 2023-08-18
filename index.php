<?php

class  Car{
    public $model;
    public $year;

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


$bmw = new Car();
$bmw->setModel("BMW");
$bmw->year = "2019";

echo $bmw->model;
