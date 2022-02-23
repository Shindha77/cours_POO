<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{
    protected bool $headlight = false;

    public function switchOn()
    {
       if ($this->currentSpeed < 10) {
           $this->headlight = false;
       } else {
           $this->headlight = true;
       }
    }

    public function switchOff()
    {
        $this->headlight = false;
    }
}
