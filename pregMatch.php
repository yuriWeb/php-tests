<?php

$checkPattern = '/^[.]+$/u';
if (preg_match($checkPattern, 'test')) {
    echo 'dot works';
} else {
    echo 'dot not works';
}


/*
$string = 'passenger0name';
$string = 'passenger0lastName';
$string = 'test';

$pattern = '/^passenger(\d){1}(.*)/';
$found = preg_match($pattern, $string, $matches);
if ($found) {
    echo 'Found<br>';
} else {
    echo 'Not found<br>';
}

print_r($matches);
echo '<br>';
echo $matches[1];
echo '<br>';
echo $matches[2];
echo '<br>';
*/