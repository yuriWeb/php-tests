<?php
$xml = file_get_contents('for-xpath.xml');
$sXml = simplexml_load_string($xml);
/*
print_r($sXml->TICKET->TICKET_NUMBER);
echo "\n";
print_r((string)$sXml->TICKET->TICKET_NUMBER);
*/


foreach ($sXml->xpath('/DATA/TICKET') as $ticket) {
    $ticket->TICKET_NUMBER[0] = 'test';
    $ticket->TICKET_NUMBER = 'test2';
}

//print_r($sXml->TICKET->TICKET_NUMBER);

//echo $sXml;

//TO REMOVE XML TAG
/*$dom = dom_import_simplexml($sXml);
echo $dom->ownerDocument->saveXML($dom->ownerDocument->documentElement);
*/