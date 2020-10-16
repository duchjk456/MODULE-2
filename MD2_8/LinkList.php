<?php
include_once 'Node.php';

class LinkList
{
    private $firstNode;
    private $lastNode;
    private $count;
    public function __construct()
    {
        $this->firstNode=Null;
        $this->lastNode=Null;
        $this->count=0;
    }

    public function insertFirst($data)
    {
            $node=new Node($data);
            $node->link=$this->firstNode;
            $this->firstNode=$node;
            if($this->lastNode==null){
                $this->lastNode=$node;
            }
            $this->count++;
    }

    public function insertLast($data)
    {

        if($this->firstNode!=null){
            $node=new Node($data);
            $this->lastNode->link=$node;
            $node->link=null;
            $this->lastNode=$node;
            $this->count++;
        }else{
            $this->insertFirst($data);
        }
    }

    public function totalNodes()
    {
        return $this->count;
    }

    public function readList()
    {
        $listData=[];
        $current=$this->firstNode;
        while ($current!=null){
            array_push($listData,$current->readNode());
            $current=$current->link;
        }
        return $listData;
    }

    public function remove($index)
    {
        $list=$this->readList();
        array_splice($list,$index,1);
        return $list;
    }

    public function deleteNode($data)
    {
        if($this->firstNode=null){
            return "K co gi de xoa";
        }else{
            $list=$this->readList();
            if(array_key_exists($data,$list)){
                array_splice($list,$data);
            }
            else
            {
                return 'Khong co phan tu trong list';
            }
            return $list;

        }
    }
}
$list=new LinkList();
echo $list->deleteNode(2);
$list->insertFirst(12);
echo'<pre>';
print_r($list);