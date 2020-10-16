<?php
//namespace App;
include_once 'Colorable.php';
class Square implements Colorable
{
    public $width;

    /**
     * Square constructor.
     * @param $width
     */
    public function __construct($width)
    {
        $this->width = $width;
    }

    public function howToColor()
    {
        return 'Color all four sides.';
    }
}