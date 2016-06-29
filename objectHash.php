<?php
class Test {}
$a = new Test();
$b = new Test();

echo spl_object_hash($a);
echo '<br>';
echo spl_object_hash($b);