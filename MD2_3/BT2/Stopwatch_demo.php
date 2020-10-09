<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php include ("Stopwatch.php") ?>
<?php $time=new Stopwatch()?>
<?php
$arr=[];
for($i=0;$i<1000000;$i++){
    $num=rand(1,10000000000000);
    array_push($arr,$num);
}
sort($arr);
$time->stop();
?>
<?php echo "Thời gian để sắp xếp chuỗi 100000 số là: " .$time->getElapsedTime(); ?>
</body>
</html>