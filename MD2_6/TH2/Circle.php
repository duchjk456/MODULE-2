<?php


class Circle
{
    public $radius;
    public $name;

    /**
     * Circle constructor.
     * @param $radius
     * @param $name
     */
    public function __construct($name, $radius)
    {
        $this->radius = $radius;
        $this->name = $name;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


}