<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    public function addVehicle($vehicle): void
    {
        if ($vehicle instanceof Bicycle) {
            $this->currentVehicles[] = $vehicle;
        } else {
            echo 'véhicule non autorisé sur cette route';
        }
    }

    public function setnbLane(int $nbLane): void
    {
        $this->nbLane = 1;
    }

public function setmaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = 10;
    }
}