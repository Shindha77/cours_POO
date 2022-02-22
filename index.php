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

