<?php

//Magic methods

use Kitchen\Table;
use Html\Table as Htable;

require_once 'autoload.php';
$bingo = new Dog();
$bmw = new Car();
$cat = new Cat();
$cat->name = 'Kisa';

$cat2 = clone $cat;

echo $cat;
