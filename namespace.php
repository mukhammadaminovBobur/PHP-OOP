<?php

use Kitchen\Table;
use Html\Table as Htable;

require 'classes/Dog.php';
require 'Html/Table.php';
require 'Kitchen/Table.php';

//Namespace

$bingo = new Dog();

$table = new Table();

var_dump($table);
