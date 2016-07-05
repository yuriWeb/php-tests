<?php
define('DATE_FORMAT', 'Y.m.d');

function convertToDate($dateString) {
    $date = DateTime::createFromFormat(DATE_FORMAT, $dateString);

    if ($date) {
        echo $date->format(DATE_FORMAT) . '<br>';
    } else {
        echo 'Date not parsed: ' . $dateString . '<br>';
    }

}

convertToDate('2015.12.26');
convertToDate('20151226');


