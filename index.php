<?php

require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$homerCar = new Car('pink', 4, 'essence');
try {
    $homerCar->start();
} catch (Exception $e) {
    $homerCar->setParkBrake(false);
} finally {
    echo 'Ma voiture roule comme un donut';
}

$tornado = new Bicycle('black', 1);

$homerCar->switchOn();
var_dump($homerCar->headlight);
$homerCar->switchOff();
var_dump($homerCar->headlight);
echo $tornado->forward();
echo $tornado->switchOn();
var_dump($tornado);
echo $tornado->brake();
var_dump($tornado);
echo $tornado->switchOff();
var_dump($tornado);

