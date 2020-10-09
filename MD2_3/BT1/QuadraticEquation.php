<?php


class QuadraticEquation
{
private $a;
private $b;
private $c;
function __construct($_a,$_b,$_c){
    $this->a=$_a;
    $this->b=$_b;
    $this->c=$_c;
}

    /**
     * @return mixed
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * @return mixed
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * @return mixed
     */
    public function getC()
    {
        return $this->c;
    }
    public function getDiscriminant(){
        return pow($this->b,2)-4*$this->a*$this->c;
    }
    public function getRoot1(){
        return (-$this->b + sqrt($this->getDiscriminant()))/($this->a*2);
}
    public function getRoot2(){
        return (-$this->b - sqrt($this->getDiscriminant()))/($this->a*2);
}

}