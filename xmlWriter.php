<?php

$string = 'Ä, Ö, Ü, ß, &, <, >, ", \', ';

function escape($string) {
    echo htmlspecialchars($string). "\n";
}

function xml($string) {
    $xml =new XMLWriter();
    $xml->openURI('php://output');
    $xml->startDocument( '1.0' , 'UTF-8' );
    $xml->writeElement("text", $string);
    $xml->endDocument();
    $xml->flush();
    unset($xml);

}

escape($string);
xml($string);