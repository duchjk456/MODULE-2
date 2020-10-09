<?php

namespace Models;
class Product
{
    private $name;
    private $price;
    public function __construct($_name=null,$_price=0)
    {
        $this->name=$_name;
        $this->price=$_price;
    }

    /**
     * @return mixed|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed|null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int|mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int|mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

}