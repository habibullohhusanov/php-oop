<?php
// abstrac classlar => mavhum class
 abstract class Car {
    public $model;
    public $year;
    public $km;
    public function __construct($model, $year) {
        $this->model = $model;
        $this->year = $year;
    }
    public function drive()
    {
        return "Driving";
    }
    public function getFuel()
    {
        return "Fueling";
    }
}

/*
abstract class Car {...}
bu classdan obyekt yaratib bo'lmaydi. Undan faqat class yaratish mumkun
abstract public f()
bunday funksiyalarni tanasi bo'lmaydi. Bular joylashgan classdan extends olinsa unda aynan shunday funksiya bo'lishi shart
*/

class ElectricCar extends Car {
    public $battery;
    public function getFuel()
    {
        return "Charging";
    }
}
$bmw = new ElectricCar("E", "2024");
$bmw->battery = "5000Am";
var_dump($bmw);