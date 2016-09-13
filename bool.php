<?php
function showResult($var) {
    $var = (bool)$var;
    if ($var === true) {
        echo 'true<br>';
    } else {
        echo 'not true<br>';
    }
}

$values = [
    'true',
    'false'
];

foreach ($values as $var) {
    showResult($var);
}