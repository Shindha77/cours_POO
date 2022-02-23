<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{
    public bool $headlight = false;

    public function switchOn()
    {
       if ($this->setCurrentSpeed > 10) {
           $this->headlight = true;
       } else {
           $this->headlight = false;
       }
    }

    public function switchOff()
    {
        $this->headlight = false;
    }
}
