<?php
$arr = [];
$arr[0]['name'] = 'test';
$arr[0]['surname'] = 'test2';
$arr[1]['name'] = 'test3';
$arr[1]['surname'] = 'test4';

$info = each($arr);
print_r($info['value']);

$info = each($arr);
print_r($info['value']);