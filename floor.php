<?php
function divideCheck($value) {
    $dividedValue = $value . '750';
    $dividedValue = (int) $dividedValue;

    $divisionResult = $dividedValue / 1000;
    $divisionResult = floor($divisionResult);
    $divisionResult = (int) $divisionResult;

    if ($divisionResult !== $value ) {
        echo $divisionResult . ' is not equal to ' . $value . '<br>';
    }
}

$maxValue = 100000;
echo 'Starting check with ' . $maxValue . ' iterations<br>';
for ($value = 1; $value <= $maxValue; $value++) {
    divideCheck($value);
}
echo 'Check ended';

/*
$var = (0.1 + 0.7)*10;
echo (int)$var;
echo '<br>';
echo floor($var);
*/