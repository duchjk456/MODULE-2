<?php

include_once "Node.php";
class Queue
{
    private $font=null;
    private $back=null;

    public function isEmpty()
    {
        return $this->font==null;
    }

    public function enqueue($value)
    {
        $oldBack=$this->back;
        $this->back=new Node();
        $this->back->value=$value;
        if($this->isEmpty()){
            $this->font=$this->back;
        }else{
            $oldBack->next=$this->back;
        }
    }

    public function dequeue()
    {
        if($this->isEmpty()){
            return null;
        }
        $removedValue=$this->font->value;
        $this->font=$this->font->next;
        return $removedValue;
    }
}
$queue = new Queue();
$queue->enqueue("start");
$queue->enqueue(1);
$queue->enqueue(2);
$queue->dequeue();
$queue->dequeue();
$queue->isEmpty();
$queue->enqueue(3);
$queue->enqueue(4);
$queue->dequeue();
$queue->dequeue();
$queue->dequeue();
$queue->isEmpty();