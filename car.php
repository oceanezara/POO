<?php
    require_once 'vehicle.php';
    class Car extends Vehicle
    {
        

        private string $energy;
        private int $energyLevel;

        public function __construct(string $color, int $nbSeats, string $energy)
        {
        parent :: __construct($color, $nbSeats);
        $this->energy = $energy;
        }

        public const ALLOWED_ENERGIES = [
            'fuel',
            'electric',
        ];

        public function getColor(): string
        {
        return $this->color;
        }
        public function setColor(string $color): void
        {
        $this->color = $color;
        } 

        public function getCurrentSpeed(): int
        {
            return $this->currentSpeed;
        }

        public function setCurrentSpeed(int $currentSpeed): void
        {
            $this->currentSpeed = $currentSpeed;
        }

        public function getNbWheels(): int
        {
            return $this->nbWheels;
        }

        public function setNbwheels(int $nbWheels): void
        {
            $this->nbWheels = $nbWheels;
        }
        
        public function getNbseats():int
        {
            return $this -> nbSeats;
        }

        public function setNbSeats(int $nbSeats): void
        {
            $this->nbSeats = $nbSeats;
        }

        public function getEnergy():string
        {
            return $this -> energy;
        }

        public function setEnergy(string $energy): Car
        {
            if (in_array($energy, self::ALLOWED_ENERGIES)) {
                $this->energy = $energy;
            }
            return $this;
        }

        public function getenergyLevel():int
        {
            return $this -> energyLevel;
        }
        public function setEnergyLevel(int $energyLevel): void
        {
            $this->energyLevel = $energyLevel;
        }

        public function forward(): string
        {
        $this->currentSpeed = 15;

            return "Go !";  
        }

        public function brake(): string
        {
            $sentence = "";
            while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
        }

        public function start(): string 
        {
            $this -> currentSpeed = 0;
            return "Start !";

        }
    }