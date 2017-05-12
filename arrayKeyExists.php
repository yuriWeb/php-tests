<?php
$arr = [];
if (array_key_exists(null, $arr)) {
    echo 'exists';
} else {
    echo 'not exists';
}
echo '<br>';
$arr = [
    null => 112
];
if (array_key_exists(null, $arr)) {
    echo 'exists';
} else {
    echo 'not exists';
}