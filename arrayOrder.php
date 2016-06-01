<?php

$arr = [];
$arr[3] = 3;
$arr[1] = 1;
$arr[5] = 5;
$arr[2] = 2;

foreach ($arr as $value) {
    echo $value . '<br>';
}
//Result: array is not sorted even if it has int keys

echo '<br>';
ksort($arr);
foreach ($arr as $value) {
    echo $value . '<br>';
}
//Result: array is ordered