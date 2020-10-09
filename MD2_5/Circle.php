<?php


class Circle
{
    public $radius;
    public $color;
    public $area;

    /**
     * Circle constructor.
     * @param $radius
     * @param $color
     * @param $area
     */
    public function __construct($radius, $color, $area)
    {
        $this->radius = $radius;
        $this->color = $color;
        $this->area = $area;
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

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param mixed $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

}