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
    Nhập số cần đọc: <input type="number" name="number">
    <button type="submit">Read</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_REQUEST['number'];
    $read = '';
    $arrOne = ["Zero", "One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine"];
    $arrTwo = ["Ten", "Eleven", "Twelve", "Thirteen", "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eighteen", "Nineteen"];
    $arrThree = ["Twenty", "Thirty", "Forty", "Fifty", "Sixty", "Seventy", "Eighty", "Ninety"];
    if ($num < 0 || $num > 999) {
        echo 'Bản free chỉ dịch từ 0 tới 999! Nạp 5000000000000000000000Đ để bổ sung thêm tính năng ';
        return;
    }
    if ($num >= 0 && $num < 10) {
        $read = $arrOne[$num];
    } elseif ($num >= 10 && $num < 20) {
        $read = $arrTwo[$num - 10];
    } else if ($num >= 20 && $num < 100) {
        if ($num % 10 == 0) {
            $read = $arrThree[$num / 10 - 2];
        } else {
            $read = $arrThree[$num / 10 - 2] . " " . $arrOne[$num % 10];
        }
    } else if ($num < 1000) {
        if ($num % 100 == 0 && $num > 0) {
            $read = $arrOne[$num / 100] . "hundred";
        } else {
            if ($num % 100 < 10) {
                $read = $arrOne[$num / 100] . " hundred " . $arrOne[$num % 100];
            } else if ($num % 100 < 20) {
                $read = $arrOne[$num / 100] . " hundred " . $arrTwo[($num % 100) - 10];

            } else if (($num % 100) % 10 == 0) {
                $read = $arrOne[$num / 100] . " hundred " . $arrThree[($num % 100) / 10 - 2];
            } else {
                $read = $arrOne[$num / 100] . " hundred " . $arrThree[($num % 100) / 10 - 2] . " " . $arrOne[($num % 100) % 10];
            }
        }
    }

    echo $read;
}
?>
</body>
</html>