<?php

// skateboard.php

require_once 'vehicle.php';
require_once 'lightableInterface.php';

class Skateboard extends Vehicle implements LightableInterface{

    protected string $color;

    protected int $currentSpeed;

    protected int $nbSeats;

    protected int $nbWheels;

    public function switchOn()
    {

    }
    public function switchOff(){

    }
    

    
}