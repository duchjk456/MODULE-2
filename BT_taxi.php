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
    <label for="taxi">Nhập số Km: </label><br><br>
    <input id="taxi" type="text" name="input"><br><br>
    <button type="submit">Tính</button>
</form>
<?php
function display($money)
{
    return "Số tiền bạn phải trả là: " . $money . "Đ";
}

function cal($input)
{
    $first_money = 15000;
    $second_money = 13500;
    $third_money = 11000;
    if (is_numeric($input) == false||$input<0) {
        echo "Vui lòng nhập số km hợp lệ!";
    } elseif ($input <= 1 && $input >= 0) {
        $money = $first_money;
        echo display($money);
    } elseif ($input <= 5) {
        $money = $first_money + $second_money * ($input - 1);
        echo display($money);
    } elseif ($input <= 120) {
        $money = $first_money + $second_money * 4 + $third_money * ($input - 5);
        echo display($money);
    } elseif ($input > 120) {
        $money = ($first_money + $second_money * 4 + $third_money * ($input - 5)) * 0.9;
        echo display($money);
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $input = $_REQUEST['input'];
    cal($input);
}
?>
</body>
</html>