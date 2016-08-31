<?php
$parameters = [
    'busfor' => [
        'url' => 'http://zero.com/',
        'key' => 'sdsdfsd/sdgfsdf24sdfsdf='
    ],
];

foreach ($parameters as $supplierToken => $p) {
    $pJson = json_encode($p);
    echo $pJson;
}
