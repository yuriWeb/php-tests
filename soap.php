<?php
function getOptions() {
    return [
        'trace' => 1,
        'soap_version' => SOAP_1_1,
        'encoding' => 'UTF-8',
        'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
        'exceptions' => true,
        'cache_wsdl' => WSDL_CACHE_NONE
    ];
}

function getSoapHeader() {
    $company = ''; //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    $password = ''; //<=================================
    $username = ''; //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    $namespaceUrl = 'http://schemas.datacontract.org/2004/07/busTicketService';
    $affiliateApprover = new \SoapVar(
    //Do not reorder - order is important!
        array(
            new \SoapVar($company, XSD_STRING, null, null, 'company', $namespaceUrl),
            new \SoapVar($password, XSD_STRING, null, null, 'password', $namespaceUrl),
            new \SoapVar($username, XSD_STRING, null, null, 'userName', $namespaceUrl)
        ),
        SOAP_ENC_OBJECT
    );

    $header = new \SoapHeader('http://ticketservice.atlasyazilim.com.tr', 'affiliateApprover', $affiliateApprover);

    return $header;
}

function getParameters() {
    return [
        'departure' => 'ANKARA',
        'destination' => 'ANTALYA',
        'journeyDate' => '2016-11-02'
    ];
}

ini_set('default_socket_timeout', 10);
$soapClient = new SoapClient("http://ticketservice.atlasyazilim.com.tr/busTicketService.svc?singleWsdl", getOptions());
$soapClient->__setSoapHeaders(getSoapHeader());
try {
    $result = $soapClient->__soapCall( 'getJourneyList', ['parameters' => getParameters()] );
} catch (Exception $e) {
}

echo '<br><br>RESULT:<br>';
print_r($result);

echo '<br><br>REQUEST:<br>';
print_r($soapClient->__getLastRequest());
