<?php

abstract class Vehicle
{

    protected int $currentSpeed = 0;

    protected int $nbWheels;

    public function __construct(protected string $color, protected int $nbSeats)
    {
    }

    public function forward(): string
    {
        $this->setCurrentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->setCurrentSpeed > 0) {
            $this->setCurrentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
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

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
}
