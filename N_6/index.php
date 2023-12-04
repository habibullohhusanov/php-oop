<?php
// interface => Shartnoma

 interface Car {
    /*
        interfacega faqat funksiya public holda yoziladi
        tanasi yozilmaydi
    */
    public function drive();
    public function getFuel();
}


class ElectricCar implements Car {
    public $battery;
    public function drive(){
        return "driving";
    }
    public function getFuel()
    {
        return "Charging";
    }
}
$bmw = new ElectricCar("E", "2024");
$bmw->battery = "5000Am";
var_dump($bmw);
