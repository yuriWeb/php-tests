<?php
$arr = [
    3 => [
        2 => 2,
        4 => 4,
        5 => 5,
        3 => 3
    ],
    1 => [
        3 => 3,
        6 => 6,
        1 => 1,
        5 => 5,
    ],
    2 => [
        5 => 5,
        2 => 2,
        1 => 1,
        3 => 3
    ],
];

foreach ($arr as &$inner) {
    ksort($inner);
}
ksort($arr);

echo '<pre>';
print_r($arr);
echo '</pre>';