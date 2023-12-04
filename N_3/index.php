<?php
// Inheritance
class Car {
    public $model;
    public $year;
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
final class Car {...}
bu classdan exdetend olib bo'lmaydi
final public f() {...}
class ni ichidagi bunday funksiyalar extend bo'lmaydi
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