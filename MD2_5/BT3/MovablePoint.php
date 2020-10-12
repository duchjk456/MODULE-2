<?php


class MovablePoint extends Point
{
    public $xSpeed=0.0;
    public $ySpeed=0.0;
    public function __construct($x, $y,$xSpeed,$ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed=$xSpeed;
        $this->ySpeed=$ySpeed;

    }

    /**
     * @return float
     */
    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    /**
     * @param float $xSpeed
     */
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    /**
     * @return float
     */
    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    /**
     * @param float $ySpeed
     */
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    public function getSpeed()
    {
        return [$this->xSpeed,$this->ySpeed];
    }

    public function __toString()
    {

        return  "(".$this->x.",".$this->y."),speed=".$this->move();
    }

    public function move()
    {
        $this->x+=$this->xSpeed;
        $this->y+=$this->ySpeed;
        return $this->x.','.$this->y;
    }
}