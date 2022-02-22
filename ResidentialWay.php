<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    public function addVehicle($vehicle): void
    {
        $this->currentVehicles[] = $vehicle;
    }

    public function setnbLane(int $nbLane): void
    {
        $this->nbLane = 2;
    }

    public function setmaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = 50;
    }
}
