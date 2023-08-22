<?php

//Clone

use Kitchen\Table;
use Html\Table as Htable;

require_once 'autoload.php';
$bingo = new Dog();
$bmw = new Car();
$cat = new Cat();
$cat->name = 'Kisa';
var_dump($cat->name);

$cat2 = clone $cat;
$cat->name = "Baroq";
var_dump($cat2->name);
