<?php
    Class Speedometer
    {

        public const KM_TO_MILE = 0.621;
        public const MILE_TO_KM = 1.609;




        public static function convertKmToMiles(int $distance): int
        {   
            return $distance * self::KM_TO_MILE;
        }
    }
