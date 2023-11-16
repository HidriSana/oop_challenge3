<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';

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

$motorWay = new MotorWay();
$skateboard = new Skateboard('Black', 0);

echo $motorWay->addVehicle($car);
echo $motorWay->addVehicle($bicycle);
echo $motorWay->addVehicle($truck);
echo $motorWay->addVehicle($skateboard);

var_dump($motorWay->getCurrentVehicles());
