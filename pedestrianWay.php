<?php
    require_once 'highWay.php';
    final class Pedestrianway extends Highway
    {
        protected int $nbLane = 1;
        protected int $maxSpeed = 10;

        public function addVehicle(Vehicle $vehicle)
        {
            if($vehicle instanceof Bicycle or $vehicle instanceof Skateboard){
                echo "Véhicule autorisé" . "<br>";
                $this->currentVehicles[] = $vehicle;
            }
            else{
                echo "Véhicule non autorisé" . "<br>";
            }
        }

    }