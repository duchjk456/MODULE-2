<?php


include_once "Animal.php";
include_once "Edible.php";

class Chicken extends Animal implements Edible
{

    public function howToEat()
    {
        return "Could be fired";
        // TODO: Implement howToEat() method.
    }

    public function makeSound()
    {
        return "Make sound: cluck-cluck!";
        // TODO: Implement makeSound() method.
    }
}