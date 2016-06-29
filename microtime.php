<?php
function getMicrotimeAsString()
{
    list($microseconds, $seconds) = explode(" ", microtime());
    $microseconds = str_replace('0.', '', $microseconds);

    return $seconds . $microseconds;
}

echo time();
echo '<br>';
echo getMicrotimeAsString();
echo '<br>';
echo microtime();

