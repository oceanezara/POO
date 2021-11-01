<?php
    require_once 'highWay.php';
    final class MotorWay extends Highway
    {
        protected int $nbLane = 4;
        protected int $maxSpeed = 130;

        public function addVehicle(Vehicle $vehicle)
        {
            if($vehicle instanceof Car){
                echo "Véhicule autorisé" . "<br>";
                $this->currentVehicles[] = $vehicle;
            }
            else{
                echo "Véhicule non autorisé" . "<br>";
            }
        }

    }