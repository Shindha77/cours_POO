<?php

abstract class HighWay
{
    protected array $currentVehicles;

    protected int $nbLane;

    protected int $maxSpeed;
    

    abstract public function addVehicle($vehicle): void;

    public function setCurrentVehicles(array $currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }

    public function getcurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setnbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getnbLane(): int
    {
        return $this->nbLane;
    }

    public function setmaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    public function getmaxSpeed(): int
    {
        return $this->maxSpeed;
    }
}