<?php

include_once 'Resizeable.php';
include_once 'Circle.php';
include_once 'Rectangle.php';
include_once 'Square.php';

$hinh[0]=new Circle(12);
$hinh[1]=new Rectangle(20,10);
$hinh[2]=new Square(20);
echo '<pre>';
foreach ($hinh as $name){
    echo $name->resize().'<br>';
}