<?php
$arr = [1, 2, 3, 1, 2, 3, 1, 2, 3];
$newArr=[];
$numsItem=count($arr)/3;
for($i=0;$i<$numsItem;$i++){
    array_push($newArr,$arr[$i],$arr[$i+$numsItem],$arr[$i+$numsItem*2]);
}
echo "<pre?";
var_dump($newArr);