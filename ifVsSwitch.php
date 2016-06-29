<?php
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

function checkSwitch($var) {
    $result = 0;
    switch ($var) {
        case 1:
            $result = 1;
            break;
        case 2:
            $result = 2;
            break;
        case 3:
            $result = 3;
            break;
        case 4:
            $result = 4;
            break;
        case 5:
            $result = 5;
            break;
        case 6:
            $result = 6;
            break;
        case 7:
            $result = 7;
            break;
        case 8:
            $result = 8;
            break;
        case 9:
            $result = 9;
            break;
        case 10:
            $result = 10;
            break;
        case 11:
            $result = 11;
            break;
        case 12:
            $result = 12;
            break;
    }
    return $result;
}


function checkIf($var) {
    $result = 0;
    if ($var == 1) {
        $result = 1;
    }
    elseif ($var == 2) {
        $result = 2;
    }
    elseif ($var == 3) {
        $result = 3;
    }
    elseif ($var == 4) {
        $result = 4;
    }
    elseif ($var == 5) {
        $result = 5;
    }
    elseif ($var == 6) {
        $result = 6;
    }
    elseif ($var == 7) {
        $result = 7;
    }
    elseif ($var == 8) {
        $result = 8;
    }
    elseif ($var == 9) {
        $result = 9;
    }
    elseif ($var == 10) {
        $result = 10;
    }
    elseif ($var == 11) {
        $result = 11;
    }
    elseif ($var == 12) {
        $result = 12;
    }
    return $result;
}


echo 'if start: ' . microtime_float() . '<br>';
for ($i = 0; $i < 10000000; $i++ ) {
    checkIf(11);
}
echo 'if end: ' . microtime_float();

echo '<br><br>';

echo 'switch start: ' . microtime_float() . '<br>';
for ($i = 0; $i < 10000000; $i++ ) {
    checkSwitch(11);
}
echo 'switch  end: ' . microtime_float();