<?php


class Node
{
    public $data;
    public $link;

    /**
     * Node constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function readNode()
    {
        return $this->data;
    }

}