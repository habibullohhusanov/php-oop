<?php

class Car {
    public $model;
    public $year;
    public function setModel($model) {
        $this->model = $model;
    }
}
$bmw = new Car();
$bmw->model = "m3cs";
$bmw->setModel("m5cs");
$bmw->year = "2023";
var_dump($bmw);