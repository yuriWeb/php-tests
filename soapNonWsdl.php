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
    $company = '';    //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    $password = ''; //<==================================
    $username = '';  //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

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
    //Produces params/items
    /*return [
        new SoapParam(
            new SoapVar('ANKARA', XSD_STRING, null, null, 'departure', 'http://tempuri.org/'),
            'departure'
        ),
        new SoapParam(
            new SoapVar('ANTALYA', XSD_STRING, null, null, 'destination', 'http://tempuri.org/'),
            'destination'
        ),
        new SoapParam(
            new SoapVar('2016-11-02', XSD_DATETIME, null, null, 'journeyDate', 'http://tempuri.org/'),
            'journeyDate'
        ),
    ];*/

    //Produces params/items
    /*return [
        new SoapParam('ANKARA','departure'),
        new SoapParam('ANTALYA','destination'),
        new SoapParam('2016-11-02','journeyDate'),
    ];*/


    //Produces correct request
    return [
        new SoapVar('ANKARA', XSD_STRING, null, null, 'departure', 'http://tempuri.org/'),
        new SoapVar('ANTALYA', XSD_STRING, null, null, 'destination', 'http://tempuri.org/'),
        new SoapVar('2016-11-02', XSD_DATETIME, null, null, 'journeyDate', 'http://tempuri.org/'),
    ];
}

ini_set('default_socket_timeout', 10);
$options = getOptions();
$options['location'] = 'http://ticketservice.atlasyazilim.com.tr/busTicketService.svc'; //From <soap:address location="">
$options['uri'] = 'http://tempuri.org/';
$soapClient = new SoapClient(null, $options);
$soapClient->__setSoapHeaders(getSoapHeader());
try {
    $result = $soapClient->__soapCall( 'getJourneyList', getParameters(), ['soapaction' => 'http://tempuri.org/IbusTicketService/getJourneyList'] );
} catch (Exception $e) {
    echo 'ERROR: ' . $e->getMessage() . '<br>';
}

echo '<br><br>RESULT:<br>';
print_r($result);

echo '<br><br>REQUEST:<br>';
print_r($soapClient->__getLastRequest());

echo '<br><br>RESPONSE:<br>';
print_r($soapClient->__getLastResponse());