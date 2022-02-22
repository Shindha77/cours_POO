<?php

require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';

// Instanciation d'un vélo $rockrider
$rockrider = new Bicycle('yellow', 1);

// Instanciation d'un vélo $tornado
$tornado = new Bicycle('black', 1);

// Instanciation d'une voiture $homerCar
$homerCar = new Car('pink', 5, 'essence');

// Instanciation d'une voiture $krustyCar
$krustyCar = new Car('white', 2, 'électrique');

// Deplacement  vélo tornado
echo $tornado->forward();
echo '<br> Vitesse du vélo : ' . $tornado->setCurrentSpeed . ' km/h' . '<br>';
echo $tornado->brake();
echo '<br> Vitesse du vélo : ' . $tornado->setCurrentSpeed . ' km/h' . '<br>';

// Deplacement voiture homer
echo '<br>' . $homerCar->start() . '<br>';
echo $homerCar->forward();
echo '<br> Vitesse de la voiture : ' . $homerCar->setCurrentSpeed . 'km/h' . '<br>';
echo $homerCar->brake();
echo '<br> Vitesse de la voiture : ' . $homerCar->setCurrentSpeed . 'km/h' . '<br>';

// Instanciation d'un camion $volvo
$volvo = new Truck('black', 3, 'diesel fuel', 200);

//Deplacement camion volvo
echo '<br>' . $volvo->start() . '<br>';
echo $volvo->forward();
echo '<br> Vitesse du camion : ' . $volvo->setCurrentSpeed . 'km/h' . '<br>';
echo $volvo->brake();
echo '<br> Vitesse du camion : ' . $volvo->setCurrentSpeed . 'km/h' . '<br>';

// test de remplissage
$volvo->setFilling(150);
echo '<br>' . $volvo->currentFilling() . '<br>';

// test fonction addVehicle MotorWay
$motorWay = new MotorWay();

echo '<br>' . $motorWay->addVehicle($tornado) . '<br>';
echo '<br>' . $motorWay->addVehicle($homerCar) . '<br>';
echo '<br>' . $motorWay->addVehicle($volvo) . '<br>';
var_dump($motorWay->getcurrentVehicles());

// test fonction addVehicle ResidentialWay
$residentialWay = new ResidentialWay();

echo '<br>' . $residentialWay->addVehicle($tornado) . '<br>';
echo '<br>' . $residentialWay->addVehicle($homerCar) . '<br>';
echo '<br>' . $residentialWay->addVehicle($volvo) . '<br>';
var_dump($residentialWay->getcurrentVehicles());

// test fonction addVehicle PedestrianWay
$pedestrianWay = new PedestrianWay();

echo '<br>' . $pedestrianWay->addVehicle($tornado) . '<br>';
echo '<br>' . $pedestrianWay->addVehicle($homerCar) . '<br>';
echo '<br>' . $pedestrianWay->addVehicle($volvo) . '<br>';
var_dump($pedestrianWay->getcurrentVehicles());