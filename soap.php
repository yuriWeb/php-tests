<?php
$soapClient = new SoapClient("http://ticketservice.atlasyazilim.com.tr/busTicketService.svc?singleWsdl");
$params = array('test' => 'ok');
$result = $soapClient->getJourneyList( $params );
echo 'ok2';