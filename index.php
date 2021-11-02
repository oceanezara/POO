<?php

require_once 'bicycle.php';
$bike = new Bicycle('blue', 24);

var_dump($bike);

echo '<br/>';
echo '<br/>';
echo '<br/>';

require_once 'car.php';
$car = new Car('green', 4, 'electric');
echo $car -> forward();

var_dump($car);

echo '<br/>';
echo '<br/>';
echo '<br/>';

var_dump(Car::ALLOWED_ENERGIES);

echo '<br/>';
echo '<br/>';
echo '<br/>';

require_once 'truck.php';
$truck = new Truck ('yellow', 2, 25);
$truck -> setLoading(25);
var_dump($truck);

echo '<br/>';

echo $truck -> loadLevel();

echo '<br/>';

$truck -> setLoading(20);
echo $truck -> loadLevel();

$vehicle = new vehicle('red', 4);

require_once 'highWay.php';
require_once 'motorWay.php';
require_once 'pedestrianWay.php';
require_once 'residentialWay.php';
require_once 'skateboard.php';

echo '<br/>';
echo '<br/>';
echo '<br/>';

$skateboard = new Skateboard(4, 0);
$motorway = new MotorWay();
$pedestrianWay = new Pedestrianway();
$residentialWay = new ResidentialWay();

$motorway -> addVehicle($car);
$pedestrianWay -> addVehicle($car);
$pedestrianWay -> addVehicle($skateboard);
$residentialWay -> addVehicle($truck);

$car -> setParkBrake(true);
var_dump($car -> setParkBrake(true));

try {
    $car ->start();
}
catch (Exception $e){
    echo "Exception received : " . $e->getMessage();
}
finally {
    echo " Ma voiture roule comme un donut";
}

require_once 'lightableInterface.php';

echo '<br/>';
echo '<br/>';
echo '<br/>';

$car -> switchOn(); 
echo '<br/>';

$car -> switchOff();

echo '<br>';
$bike -> setCurrentSpeed(25);

$bike -> switchOn(); 

echo '<br>';
$bike -> setCurrentSpeed(5);
$bike -> switchOn(); 

echo '<br>';

$bike -> switchOff();


