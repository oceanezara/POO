<?php
    require_once 'vehicle.php';
    class Truck extends Vehicle
    {
        

        private int $storage;
        private int $loading = 0;

        public function __construct(string $color, int $nbSeats, string $storage)
        {
        parent :: __construct($color, $nbSeats);
        $this->storage = $storage;
        }

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

        public function getStorage():int
        {
            return $this -> storage;
        }
        public function setStorage(int $storage): void
        {
            $this->storage = $storage;
        }

        public function getLoading():int
        {
            return $this -> loading;
        }
        public function setLoading(int $loading): void
        {
            $this->loading = $loading;
        }

        public function loadLevel()
        {
            if ($this->loading >= $this->storage) {
                return 'full';
                
            }
            else{
                return 'filling';
            }
        }
    }