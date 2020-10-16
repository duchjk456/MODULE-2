<?php

class Rectangle implements Resizeable
{
    public $height;
    public $width;

    /**
     * Rectangle constructor.
     * @param $height
     * @param $width
     */
    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function getArea()
    {
        return $this->height*$this->width;
        // TODO: Implement getArea() method.
    }

    public function resize()
    {   $size=mt_rand(1,100);
        echo $size/100*$this->getArea().' x'.$size.'%';
        // TODO: Implement resize() method.
    }
}