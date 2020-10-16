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
<form action="" method="post">
    Investment Amount: <input type="text" name="first_money" placeholder="Nhập số tiền ban "đầu><br><br>
    Yearly Interest Rate: <input type="text" name="rate" placeholder="Nhập lãi suất năm"><br><br>
    Number of Years: <input type="text" name="year" placeholder="Số năm đầu tư"><br><br>
    <button type="submit">Check</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]="POST"){
    $invest=$_REQUEST["first_money"];
    $rate=$_REQUEST["rate"];
    $year=$_REQUEST["year"];
    for($i=1;$i<=$year;$i++){
        $invest=$invest+$invest*$rate;
    }
    echo $invest;
}


?>
</body>
</html>
