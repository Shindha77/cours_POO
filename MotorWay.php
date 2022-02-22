<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public function addVehicle($vehicle): void
    {
        if ($vehicle instanceof Bicycle) {
            echo 'véhicule non autorisé sur cette route';
        } else {
            $this->currentVehicles[] = $vehicle;
        }
    }

    public function setnbLane(int $nbLane): void
    {
        $this->nbLane = 4;
    }

public function setmaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = 130;
    }
}