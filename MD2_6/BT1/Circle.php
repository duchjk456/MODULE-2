<?php
include_once 'Resizeable.php';

class Circle implements Resizeable
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;

    }

    public function getArea()
    {
            return pow($this->radius,2)*pi();
    }

    public function resize()
    {   $size=mt_rand(0,100);

        echo $size/100*$this->getArea().' x'.$size.'%';
    }
}