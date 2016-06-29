<?php
$xml = '<DATA>
<LOGGED>true</LOGGED>
</DATA>';

$responseXml = new \SimpleXMLElement($xml);
echo $responseXml->getName();