<?php

$arr = [1, 2, 3];
foreach ($arr as $value) {
    $value = 10;
}

echo '<pre>';
print_r($arr );
echo '</pre>';