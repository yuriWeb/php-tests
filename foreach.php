<?php
class Test
{
    public $a = 1;
    protected $b = 2;
    public $c = 3;
    protected $d = 4;
}

$test = new Test();
foreach ($test as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}



/*
$arr = [1, 2, 3];
foreach ($arr as $value) {
    $value = 10;
}

echo '<pre>';
print_r($arr );
echo '</pre>';
*/