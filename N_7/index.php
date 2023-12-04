<?php
// Traits => bitta funksiyani bir nechta classda, classda 2 tadan ortiq funksiyalarni ishlatish

 interface CarInterface {
    /*
        interfacega faqat funksiya public holda yoziladi
        tanasi yozilmaydi
    */
    public function getFuel();
}

trait DriveTrait {
    public function drive(){
        return "driving";
    }
}

class ElectricCar implements CarInterface {
    use DriveTrait;
    public $battery;
    public function getFuel()
    {
        return "Charging";
    }
}
class FuelCar implements CarInterface {
    use DriveTrait;
    public $battery;
    public function getFuel()
    {
        return "Charging";
    }
}
$bmw = new ElectricCar("E", "2024");
$bmw->battery = "5000Am";
var_dump($bmw);
