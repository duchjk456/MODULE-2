<?php


class Calculator
{
  public $num1;
  public $num2;
  public $mark;

    /**
     * Calculator constructor.
     * @param $num1
     * @param $num2
     * @param $mark
     */
    public function __construct($num1, $num2,$mark)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->mark = $mark;
    }

    /**
     * @return mixed
     */
    public function getNum1()
    {
        return $this->num1;
    }

    /**
     * @param mixed $num1
     */
    public function setNum1($num1)
    {
        $this->num1 = $num1;
    }

    /**
     * @return mixed
     */
    public function getNum2()
    {
        return $this->num2;
    }

    /**
     * @param mixed $num2
     */
    public function setNum2($num2)
    {
        $this->num2 = $num2;
    }

    public function calculate($num1,$mark,$num2)
    {
        return eval($num1+$mark+$num2);
    }

    public function __toString()
    {
        return $this->num1.$this->mark.$this->num2."=".$this->calculate($this->num1,$this->mark,$this->num2);
    }
}