<?php
// 3xil ko'rinish
class Car {
    public $model;
    protected $year;
    private $km;
    /*
        publicni hamma joyda chaqirib ishlatsak bo'ladi
        protectedni faqat classlarni ichida ishlatamiz tashqariga funksiya orqali jo'natamiz
        privateni faqat shu klassni ichida ishlatamaiz boshqa classga yoki tashqariga funksiya orqali jo'natamiz
    */
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