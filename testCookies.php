<?php
$httpRequest = new HttpRequest();

$httpRequest->setUrl("http://mdc.demo.gillbus.com/sessionLogin/online/6ZzrE5SaZFzRSjx4HwwAHIvd7Zu/SapF");

$httpRequest->setMethod(HttpRequest::METH_POST);
$httpRequest->setOptions(
    [
        'connecttimeout' => 5,
        'timeout' => 10,
    ]
);

$httpResponse = $httpRequest->send();

echo $httpResponse->getBody();
echo '<br>';
print_r($httpRequest->getResponseCookies());
echo '<br>';
$cookies = $httpRequest->getResponseCookies();
print_r($cookies[0]->cookies['JSESSIONID']);