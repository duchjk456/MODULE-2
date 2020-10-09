<?php
$arr = [1, 2, 3, 1, 2, 3, 1, 2, 3];
$arrNew = [];
$arr1 = [];
$arr2 = [];
$arr3 = [];
for ($i = 0; $i < count($arr); $i += 3) {
    array_push($arr1, $arr[$i]);
}

for ($i = 1; $i < count($arr); $i += 3) {
    array_push($arr2, $arr[$i]);
}
for ($i = 2; $i < count($arr); $i += 3) {
    array_push($arr3, $arr[$i]);
}
$arrNew=array_merge($arr1,$arr2,$arr3);

echo "<pre>";
print_r($arrNew);




