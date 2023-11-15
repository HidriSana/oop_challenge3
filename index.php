<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
//Bike story
$bicycle = new Bicycle('Blue', 1);

echo $bicycle->forward();
$bicycle->dump();
//car story
$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);
var_dump(Car::ALLOWED_ENERGIES);
//truck story
$truck = new Truck('blue', 2, 'fuel', 20);

$truck->dump();

echo $truck->forward();
echo $truck->brake();
echo $truck->setCurrentCargo(30);
echo $truck->getCurrentCargo();
echo $truck->isFull();
//test
