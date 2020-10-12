<?php include_once "Calculator.php" ?>
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
<h1>Simple Calculator</h1>
<fieldset style="width: 303px">
    <legend>Calculator</legend>
    <form action="" method="post">
        <table>
            <tr>
                <td>First operand:</td>
                <td><input type="number" name="num1"></td>
            </tr>
            <tr>
                <td>Operator:</td>
                <td>
                    <select name="cal" id="calculate" style="border-radius: 10px">
                        <option value="+">Addition</option>
                        <option value="-">Subtraction</option>
                        <option value="*">Multiply</option>
                        <option value="/">Division</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Second operand:</td>
                <td><input type="number" name="num2"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" style="border-radius: 10px">Calculate</button></td>
            </tr>
        </table>

    </form>

</fieldset>
<h1>Result:</h1>
<?php if($_SERVER["REQUEST_METHOD"]="POST"){
    $num1=$_REQUEST['num1'];
    $num2=$_REQUEST['num2'];
    $mark=$_REQUEST['cal'];
    $newCal=new Calculator($num1,$num2,$mark);
    echo $newCal;


} ?>
</body>
</html>