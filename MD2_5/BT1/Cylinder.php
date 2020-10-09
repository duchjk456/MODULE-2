<?php

use BT1\a\Circle;
class Cylinder extends \a\Circle
{   private $height;
    public function __construct($radius, $height,$color)
    {
        parent::__construct($radius, $color);
        $this->height=$height;
    }
    public function __toString()
    {
        return parent::__toString(); // TODO: Change the autogenerated stub
    }
    public function calculateArea()
    {
//        return parent::calculateArea(); // TODO: Change the autogenerated stub
        return pi()*pow($this->radius,2)*$this->height;
    }
}