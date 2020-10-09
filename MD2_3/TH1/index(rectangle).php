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
<?php include("Rectangle.php") ?>
<?php
$width = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);
echo $rectangle->width;
echo '<br>';
echo $rectangle->height;
echo '<br>';
$rectangle->height = 30;
$rectangle->width = 20;
echo $rectangle->height;
echo '<br>';
echo $rectangle->width;
echo '<br>';
echo $rectangle->getArea();
echo '<br>';
echo $rectangle->getPerimeter();
echo '<br>';
echo "Your rectangle: ".$rectangle->display();

?>
</body>
</html>