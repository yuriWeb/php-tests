<?php
require_once ('Timer.php');

$arr = [
    'acp',
    'ufs',
    'tf',
    'dbaws',
    'ip',
    'hex',
    'sncf',
    'tre',
    'ae',
    'Unit',
    'Micur',
    'bneairtrain',
    'grw',
    'renfe',
    'ma',
    'busfor',
    'aviacentr',
    'klia',
    'nsb',
    'sj',
];

/*$timer = new Timer();
$timer->start();
for ($i = 0; $i < 10000; $i++) {
    foreach ($arr as $token) {
        $hash = dechex(crc32($token));
    }
}

$timer->stop();
echo 'ended:' . $timer . '<br><br>';*/


echo '<br>CRC:<br>';
foreach ($arr as $token) {
    echo $token . ' => ' . dechex(crc32($token)) . '<br>';
}
/*
echo 'MD5:<br>';
foreach ($arr as $token) {
    echo md5($token, true) . '<br>';
}*/