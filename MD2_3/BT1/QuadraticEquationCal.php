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
<h1>Giải hệ phương trình bậc 2: ax&sup2;+bx+c=0</h1>
<form action="" method="post">
    Hệ số a: <input type="number" name="he_so_a" placeholder="Nhập hệ số a"><br><br>
    Hệ số b: <input type="number" name="he_so_b" placeholder="Nhập hệ số b"><br><br>
    Hệ số c: <input type="number" name="he_so_c" placeholder="Nhập hệ số c"><br><br>
    <button type="submit">Ok</button>
</form>
<?php include("QuadraticEquation.php") ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numA = $_REQUEST['he_so_a'];
    $numB = $_REQUEST['he_so_b'];
    $numC = $_REQUEST['he_so_c'];
    $qe = new QuadraticEquation($numA, $numB, $numC);
}
if ($qe->getDiscriminant() > 0) {
    echo "Phương trình có 2 nghiệm x1= " . $qe->getRoot1() . ", x2= " . $qe->getRoot2();
} else if ($qe->getDiscriminant() == 0) {
    echo "Phương trình có nghiệm kép x1=x2= " . $qe->getRoot1();
} else {
    echo "Phương trình vô nghiệm!";
}
?>
</body>
</html>