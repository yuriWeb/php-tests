<?php

$dom = new \DOMDocument('1.0', 'UTF-8');
$dom->preserveWhiteSpace = false;
if ($dom->loadXML('<', LIBXML_NOERROR)) {
    echo 'ok';
} else {
    echo 'not ok';
}