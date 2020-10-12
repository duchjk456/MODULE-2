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
    public function __construct($num1, $mark, $num2)
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
    {$a=0;
        switch ($mark){
            case('+'): $a=$num1+$num2;
            break;
            case ('-'): $a= $num1-$num2;
            break;
            case ('*'): $a= $num1*$num2;
            break;
            case ('/'): $a=$num1/$num2;
            break;
        }
        return $a;
    }

    public function __toString()
    { if ($this->num2==0 && $this->mark=='/'){
        return "<h3>Can't be division for 0</h3>";
    }elseif ($this->num1==null||$this->num2==null){
        return '';
    }else
        return "<h3>".$this->num1.$this->mark.$this->num2."=".$this->calculate($this->num1,$this->mark,$this->num2)."</h3>";
        }


}