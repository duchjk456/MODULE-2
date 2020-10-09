<?php


class Shape
{
    public $name;

    /**
     * Shape constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show()
{
        return "I am a shape, my name is: ".$this->name;
    }
}