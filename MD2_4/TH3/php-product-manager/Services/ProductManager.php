<?php

namespace Services;
class ProductManager
{
    private $products;

    /**
     * ProductManager constructor.
     * @param $products
     */
    public function __construct()
    {
        $this->products = [];
    }

    public function add($_product)
    {
        $this->products[]=$_product;
    }

    /**
     * @param array $products
     */
    public function setProducts($products)
    {
        $this->products = $products;
    }

    /**
     * @return array
     */
    public function getProducts()
    {
        return $this->products;
    }
}