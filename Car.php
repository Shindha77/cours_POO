<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'essence',
        'électrique',
    ];

    protected int $energyLevel;

    public function __construct(protected string $color, int $nbSeats, protected string $energy)
    {
        parent::__construct($color, $nbSeats);
    }

    public function start()
    {
        return "Ignition !";
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
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
}
