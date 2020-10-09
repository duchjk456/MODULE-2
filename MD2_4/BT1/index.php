<?php include "Employee.php" ?>
<?php include "EmployeeManager.php" ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    td{
        text-align: center;
        width: 4%;
    }
</style>
<body>
<form action="" method="post">
    Họ: <input type="text" name="first_name" placeholder="Nhập họ"><br><br>
    Tên: <input type="text" name="name" placeholder="Nhập tên"> <br><br>
    Ngày sinh: <input type="text" name="birth" placeholder="Nhập ngày sinh"><br><br>
    Địa chỉ: <input type="text" name="address" placeholder="Nhập địa chỉ"><br><br>
    Vị trí công việc: <input type="text" name="position" placeholder="Nhập vị trí công việc"><br><br>
    <button type="submit">Add</button>
</form>
<br>
<form action="" method="delete">
    <input type="text" name="delete" placeholder="nhap so tt ban muon xoa">
    <button>Delete</button>
</form>
<?php if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $first_name = $_REQUEST["first_name"];
    $name = $_REQUEST["name"];
    $birth_day = $_REQUEST["birth"];
    $address = $_REQUEST["address"];
    $position = $_REQUEST["position"];
    $employeeNew = new Employee($first_name, $name, $birth_day, $address, $position);
    EmployeeManager::add($employeeNew);
} else if ($_SERVER["REQUEST_METHOD"]="DELETE"){
    $delete=$_REQUEST["delete"];
    EmployeeManager::delete($delete);
}?>
<table border="0">
    <tr>
        <th>STT</th>
        <th>Họ</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Vị trí chức vụ</th>
    </tr>
    <?php foreach (EmployeeManager::$staff as $index => $detail): ?>
    <tr>
        <td><?php echo $index +1; ?></td>
        <td><?php echo $employeeNew->getFirstName() ?></td>
        <td><?php echo $employeeNew->getName() ?></td>
        <td><?php echo $employeeNew->getBirthDay() ?></td>
        <td><?php echo $employeeNew->getAddress() ?></td>
        <td><?php echo $employeeNew->getPosition() ?></td>
    </tr>
    <?php endforeach;?>
</table>
</body>
</html>