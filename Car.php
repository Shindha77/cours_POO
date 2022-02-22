<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'essence',
        'électrique',
    ];

    private bool $hasParkBrake = true;

    protected int $energyLevel;

    public function __construct(protected string $color, int $nbSeats, protected string $energy)
    {
        parent::__construct($color, $nbSeats);
    }

    public function start()
    {
        if ($hasParkBrake = true) {
            throw new Exception('Il y a le frein à main');
        }
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

    public function setParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function getParkBrake(): bool
    {
        return $this->hasParkBrake;
    }
}
