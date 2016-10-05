<?php
//In strict mode all tests below will fail
declare(strict_types=0);

function intToString():string {
    return 0;
}

function stringToInt():int {
    return '';
}

function nullToInt():int {
    return null;
}

function nullToString():string {
    return null;
}

$val = intToString();
var_dump($val);

$val = stringToInt(); //Will fail
var_dump($val);

$val = nullToInt(); //Will fail
var_dump($val);

$val = nullToString(); //Will fail
var_dump($val);