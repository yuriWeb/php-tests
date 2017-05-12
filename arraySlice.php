<?php

$arr = [1,2,3,4,5,6,7,8,9];

$arr = array_slice($arr, 0, -8);
echo '<pre>';
print_r($arr);
echo '</pre>';

$arr = array_slice($arr, 0, -3);
echo '<pre>';
print_r($arr);
echo '</pre>';

$arr = array_slice($arr, 0, -20);
echo '<pre>';
print_r($arr);
echo '</pre>';

exit;