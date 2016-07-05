<?php
define('DATE_FORMAT', '!Y.m.d');
//define('DATE_FORMAT', 'Y.m.d');
define('OUTPUT_DATE_FORMAT', 'Y.m.d H:i:s');
//define('DATE_FORMAT', 'Y.m.d H:i');

function convertToDate($dateString) {
    $date = DateTime::createFromFormat(DATE_FORMAT, $dateString);

    if ($date) {
        echo $date->format(OUTPUT_DATE_FORMAT) . '<br>';
    } else {
        echo 'Date not parsed: ' . $dateString . '<br>';
    }

}

//convertToDate('2015.12.26');
//convertToDate('20151226');
//convertToDate('2015.12.26 12:00');
//convertToDate('2015.12.26 12:0');
//convertToDate('2015.12.26 12');
convertToDate('2015.12.26');
//convertToDate(' ');