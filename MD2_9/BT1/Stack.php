<?php


class Stack
{
    public $stack;
    public $limit;


    public function __construct($limit)
    {
        $this->stack=array();
        $this->limit = $limit;
    }

    public function push($item)
    {
        if(count($this->stack)>$this->limit)
            echo "het cho r";

           return array_unshift($this->stack,$item);
    }

    public function isEmpty()
    {
       return empty($this->stack);
    }
    public function pop(){
        if($this->isEmpty()){
            return 'Stack is empty';
        }else{
            return array_shift($this->stack);
        }
    }

    public function top()
    {
        return current($this->stack);
    }

}
echo "<pre>";
$a=new Stack(10);
$a->push(0);
$a->push(1);
$a->push(2);
$a->push(3);
$a->push(4);
print_r($a);
$a->pop();
$a->pop();
$a->pop();
$a->push(7);
$a->push(9);
$a->pop();
$a->pop();
$a->pop();
$a->pop();
$a->pop();
print_r($a->isEmpty());