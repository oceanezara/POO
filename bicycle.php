<?php

// Bicycle.php

require_once 'vehicle.php';
require_once 'lightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface{

    protected string $color;

    protected int $currentSpeed;

    protected int $nbSeats;

    protected int $nbWheels;

    public function switchOn(){
        if ($this->currentSpeed > 10)
        echo "true";
        else{
            echo "not enough energy";
        }
    }
    public function switchOff(){
        echo "false";
    }
    
}