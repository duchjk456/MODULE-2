<?php
include_once "Animal.php";
include_once "Edible.php";
class Tiger extends Animal
{
    public function makeSound()
    {
        return "Make sound: roarrrrr!";
        // TODO: Implement makeSound() method.
    }
    public function say(){
        echo 'a';
    }
}