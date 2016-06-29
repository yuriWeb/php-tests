<?php

class Test 
{
	const VAR_NAME = 'var1';
	
	public $var1 = 3;
}

$a = new Test();
$varName = 'var1';

echo $a->$varName;
echo '<br>';
echo $a->{Test::VAR_NAME};