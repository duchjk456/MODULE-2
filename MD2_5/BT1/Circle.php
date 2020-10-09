<?php

namespace a;
class Circle
{
    public $radius;
    public $color;

    /**
     * Circle constructor.
     * @param $radius
     * @param $color
     */
    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function __toString(){
        return "Radius is: ".$this->radius.". Color is: ".$this->color.". Area is: ".$this->calculateArea();
    }

    public function calculateArea()
    {
        return pi()*pow($this->radius,2);
    }
}