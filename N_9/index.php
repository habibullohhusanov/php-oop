<?php

require_once("autoload.php");

$bmw = new Car("m5");
$newBmw = $bmw;
$newBmw2 = clone $bmw;
$bmw->setName("m8");

echo $bmw->getName()."</br>";
echo $newBmw->getName()."</br>";
echo $newBmw2->getName()."</br>";