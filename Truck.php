<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Truck extends Vehicle implements LightableInterface
{
    protected int $energyLevel;

    protected int $filling = 0;

    private bool $headlight = false;

    public function __construct(string $color, int $nbSeats, protected string $energy, protected int $capacity)
    {
       parent::__construct($color, $nbSeats);
    }

    public function switchOn()
    {
        $this->headlight = true; 
    }

    public function switchOff()
    {
        $this->headlight = false;
    }

    public function start()
    {
        return "Ignition !";
    }

    public function currentFilling(): string
    {
        if ($this->filling < $this->capacity) {

            return "in filling";
        } else {

            return "full";
        }
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }

    public function getCapacity(): int
    {
        return $this->capacity;
    }

    public function setFilling(int $filling): void
    {
        $this->filling = $filling;
    }

    public function getFilling(): int
    {
        return $this->filling;
    }
}
