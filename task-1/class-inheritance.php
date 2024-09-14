<?php
// Abstract class Shape

abstract class Shope
{
    abstract public function calculateArea();
}

// Circles Class

class Circles extends Shope
{

    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

// Rectangle Class

class Rectangle extends Shope
{
    private $length;
    private $width;

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea()
    {
        return $this->length * $this->width;;
    }
}

$circule = new Circles(10);
echo "Area OF Circles : " . $circule->calculateArea() . "\n";

$rectangle = new Rectangle(10, 20);
echo "Area OF Rectangle : " . $rectangle->calculateArea() . "\n";
