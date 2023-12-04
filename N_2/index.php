<?php

class Car {
    public $model;
    public $year;
    public function __construct($model, $year) {
        $this->model = $model;
        $this->year = $year;
    }
}
$bmw = new Car("m5 cs", "2010");
var_dump($bmw);