<?php
include_once'Circle.php';
include_once'Comparable.php';



include_once 'ComparableCircle.php';
$circleOne=new ComparableCircle('circleOne',2);
$circleTwo=new ComparableCircle('circleTwo',2);
echo '<pre>';
var_dump($circleOne);
var_dump($circleOne->compareTo($circleTwo));
