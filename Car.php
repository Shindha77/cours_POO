<?php

class Car
{
  private int $nbWheels = 4;

  private int $currentSpeed = 0;

  private string $color;

  private int $nbSeats;

  private string $energy;

  private int $energyLevel = 100;

  public function __construct(string $color, int $nbSeats, string $energy)
  {
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energy = $energy;
  }

  public function forward(): string
  {
    $this->setCurrentSpeed = 90;

    return "Go !";
  }

  public function brake(): string
  {
    $sentence = "";
    while ($this->setCurrentSpeed > 0) {
      $this->setCurrentSpeed-=10;
      $sentence .= "Brake !!!";
    }
    $sentence .= "I'm stopped !";
    return $sentence;
  }

  public function start(): string
  {
    return "Ignition !";
  }

  public function setNbWheels(int $nbWheels): void
  {
    $this->nbWheels = $nbWheels;
  }
  
  public function getNbWheels(): int
  {
    return $this->nbWheels;
  }

  public function setCurrentSpeed(int $currentSpeed): void
  {
    if ($currentSpeed >= 0) {
      $this->currentSpeed = $currentSpeed;
    }
  }

  public function getCurrentSpeed(): int
  {
    return $this->currentSpeed;
  }

  public function setColor(string $color): void
  {
    $this->color = $color;
  }

  public function getColor(): string
  {
    return $this->color;
  }

  public function setNbSeats(int $nbSeats): void
  {
    $this->nbSeat = $nbSeats;
  }

  public function getNbSeats(): int
  {
    return $this->nbSeats;
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

}