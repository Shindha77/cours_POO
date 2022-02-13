<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
  public const ALLOWED_ENERGIES = [
    'essence',
    'électrique',
  ];

  protected string $energy;

  protected int $energyLevel;

  public function __construct(string $color, int $nbSeats, string $energy)
  {
    parent::__construct($color, $nbSeats);
    $this->setEnergy($energy);
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
