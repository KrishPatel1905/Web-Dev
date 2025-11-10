<?php
// Define interface
interface Vehicle {
    public function start();
    public function stop();
}

// Implement interface in Car class
class Car implements Vehicle {
    public function start() {
        echo "Car started 🚗<br>";
    }

    public function stop() {
        echo "Car stopped 🛑<br>";
    }
}

// Implement interface in Bike class
class Bike implements Vehicle {
    public function start() {
        echo "Bike started 🏍️<br>";
    }

    public function stop() {
        echo "Bike stopped 🛑<br>";
    }
}

// Create objects
$car = new Car();
$bike = new Bike();

$car->start();
$car->stop();

$bike->start();
$bike->stop();
?>
