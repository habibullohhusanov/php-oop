<?php
// static  shu classga tegishli lekin yangi yaratilgan obyektga emas

 class Car {
    public $model;
    const FISTYEAR = 1925;
    public static $year = "2023"; // if $year, $year = 25
    public function getFuel()
    {
        return "Charging";
    }
    public static function getYear()
    {
        return self::$year;
    }
    public static function getFirst()
    {
        return self::FISTYEAR;
    }
}

class ElectricCar extends Car {
    public $model;
    public function getFuel()
    {
        return "Charging";
    }
    public function getModelElectricCar()
    {
        return parent::getYear();
    }
}
$bmw = new ElectricCar();
$bmw->model = "E";
echo ElectricCar::getYear();


var_dump($bmw);
