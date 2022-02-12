<?php

require_once 'Bicycle.php';
require_once 'Car.php';

// Instanciation d'un vélo $rockrider
$rockrider = new Bicycle('yellow');

// Instanciation d'un vélo $tornado
$tornado = new Bicycle('black');

// Instanciation d'une voiture $homerCar
$homerCar = new Car('pink', 5, 'diesel fuel');

// Instanciation d'une voiture $krustyCar
$krustyCar = new Car('white', 2, 'gasoline');

// Deplacement  vélo tornado
echo $tornado->forward();
echo '<br> Vitesse du vélo : ' . $tornado->setCurrentSpeed . ' km/h' . '<br>';
echo $tornado->brake();
echo '<br> Vitesse du vélo : ' . $tornado->setCurrentSpeed . ' km/h' . '<br>';

// Deplacement voiture homer
echo $homerCar->start() . '<br>';
echo $homerCar->forward();
echo '<br> Vitesse de la voiture : ' . $homerCar->setCurrentSpeed . 'km/h' . '<br>';
echo $homerCar->brake();
echo '<br> Vitesse de la voiture : ' . $homerCar->setCurrentSpeed . 'km/h' . '<br>';
