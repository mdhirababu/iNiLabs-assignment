<?php
// Animal Class
class Animal
{
    public function makeSound()
    {
        return "Some generic animal sound";
    }
}
// Class Dog extends Animal
class Dog extends Animal
{
    public function makeSound()
    {
        return "Bark";
    }
}
// Class Cat extends Animal
class Cat extends Animal
{
    public function makeSound()
    {
        return "Meow";
    }
}
// Class Cow extends Animal
class Cow extends Animal
{
    public function makeSound()
    {
        return "Humba";
    }
}

// Example usage

$animals = [new Dog(), new Cat(), new Cow()];
foreach ($animals as $animal) {
    echo get_class($animal) . "Make sound :" . $animal->makeSound() . "</br>";
}
