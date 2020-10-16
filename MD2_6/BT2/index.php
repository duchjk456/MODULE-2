<?php
include 'Colorable.php';
include_once '../BT1/Resizeable.php';

include_once '../BT1/Rectangle.php';
include_once '../BT1/Circle.php';
include 'Square.php';
$geometry[0] = new Circle( 23);
$geometry[1] = new Rectangle(23, 34);
$geometry[2] = new Square(1);
foreach ($geometry as $name) {
    if ($name instanceof Square){
        echo $name->howToColor();
    }
    echo $name->getArea().'<br>' ;
}