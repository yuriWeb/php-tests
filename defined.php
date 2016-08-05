<?php
define('TEST_CONST', 123);

$arr = [
    'TEST_CONST',
    'value',
    [
        'a', 'b', 'c'
    ]
];


$new = [];
foreach ($arr as $key => $value) {
    $new[$key] = defined($value) ? constant($value) : $value;
}

echo '<pre>';
print_r($new);
echo '</pre>';
