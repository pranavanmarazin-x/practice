<?php
// class created
class Vehicle
{
    // properties
    public $make;
    public $model;
    protected $speed = 0;

    public function __construct($make, $model)
    {

        $this->make = $make;
        $this->model = $model;
    }
// setter and getter for speed
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function getSpeed()
    {
        return $this->speed;
    }
// methods
    public function start()
    {
        return "Vehicle started";
    }

    public function info()
    {
        return $this->make . " " . $this->model . " Speed: " . $this->speed;
    }
}

// subclass extending Vehicle
class Car extends Vehicle
{
    // overriding start method
    public function start()
    {
        return parent::start() . " - Car is running";
    }

    public function info()
    {
        return "Car speed is " . $this->speed;
    }
}

$car = new Car("mustang", "wrangler");

$car->setSpeed(60);
echo $car->getSpeed();
echo "<br>";

echo $car->start();
echo "<br>";

echo $car->info();
