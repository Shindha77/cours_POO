<?php

require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Speedometer.php';

$homerCar = new Car('pink', 4, 'essence');
try {
    $homerCar->start();
} catch (Exception $e) {
    $homerCar->setParkBrake(false);
} finally {
    echo 'Ma voiture roule comme un donut';
}

$tornado = new Bicycle('black', 1);
echo $tornado->switchOn();
var_dump($tornado);

$homerCar->switchOn();
var_dump($homerCar);
$homerCar->switchOff();
var_dump($homerCar);
$tornado->setCurrentSpeed(15);
echo $tornado->switchOn();
var_dump($tornado);
echo $tornado->switchOff();
var_dump($tornado);

echo Speedometer::convertKmToMiles(10) . '<br>';
echo Speedometer::convertMilesToKm(10);

