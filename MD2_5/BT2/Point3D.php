<?php


class Point3D extends Point2D
{
    public $z=0.0;
    public function __construct($x, $y,$z)
    {
        parent::__construct($x, $y);
        $this->z=$z;
    }

    /**
     * @return float
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * @param float $z
     */
    public function setZ($z)
    {
        $this->z = $z;
    }

    public function setXYZ($x,$y,$z)
    {
        $this->x=$x;
        $this->y=$y;
        $this->z=$z;
    }

    public function getXYZ()
    {
        return [$this->x,$this->y,$this->z];
    }
    public function __toString()
    {
        //return parent::__toString(); // TODO: Change the autogenerated stub
        return $this->x.','.$this->y.','.$this->z;
    }
}