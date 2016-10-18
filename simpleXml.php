<?php
libxml_use_internal_errors(true);
/*
$xml = '<s:Envelope xmlns:s="http://schemas.xmlsoap.org/soap/envelope/"><s:Body><getJourneyListResponse xmlns="http://tempuri.org/"><getJourneyListResult><xs:schema id="NewDataSet" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns="" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:msprop="urn:schemas-microsoft-com:xml-msprop"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table" msprop:REFCursorName="REFCursor"><xs:complexType><xs:sequence><xs:element name="SEFERNO" msprop:OraDbType="126" type="xs:string" minOccurs="0"/><xs:element name="GUZERGAH" msprop:OraDbType="126" type="xs:string" minOccurs="0"/><xs:element name="JOURNEYDSC" msprop:OraDbType="126" type="xs:string" minOccurs="0"/><xs:element name="STOPHOUR" msprop:OraDbType="126" type="xs:string" minOccurs="0"/><xs:element name="ENDHOUR" msprop:OraDbType="126" type="xs:string" minOccurs="0"/><xs:element name="KALANKOLTUK" msprop:OraDbType="107" type="xs:decimal" minOccurs="0"/><xs:element name="EXTRASEFER" msprop:OraDbType="126" type="xs:string" minOccurs="0"/><xs:element name="BUSTYPE" msprop:OraDbType="126" type="xs:string" minOccurs="0"/><xs:element name="MULTITYPE" msprop:OraDbType="126" type="xs:string" minOccurs="0"/><xs:element name="SIRANO1" msprop:OraDbType="107" type="xs:decimal" minOccurs="0"/><xs:element name="SIRANO2" msprop:OraDbType="107" type="xs:decimal" minOccurs="0"/><xs:element name="BUSDESCRIPTION" msprop:OraDbType="126" type="xs:string" minOccurs="0"/><xs:element name="LINKOK" msprop:OraDbType="107" type="xs:decimal" minOccurs="0"/><xs:element name="FIYAT" msprop:OraDbType="107" type="xs:decimal" minOccurs="0"/><xs:element name="BEGINID" msprop:OraDbType="107" type="xs:decimal" minOccurs="0"/><xs:element name="ENDID" msprop:OraDbType="107" type="xs:decimal" minOccurs="0"/><xs:element name="BEGINARAYOLID" msprop:OraDbType="107" type="xs:decimal" minOccurs="0"/><xs:element name="ENDARAYOLID" msprop:OraDbType="107" type="xs:decimal" minOccurs="0"/><xs:element name="BUSDESCRIPTIONID" msprop:OraDbType="107" type="xs:decimal" minOccurs="0"/><xs:element name="INTPRICE" msprop:OraDbType="107" type="xs:decimal" minOccurs="0"/><xs:element name="CARDPRICE" msprop:OraDbType="107" type="xs:decimal" minOccurs="0"/><xs:element name="DISCOUNTPRICE" msprop:OraDbType="107" type="xs:decimal" minOccurs="0"/><xs:element name="TARIH" msdata:DateTimeMode="Unspecified" msprop:OraDbType="106" type="xs:dateTime" minOccurs="0"/><xs:element name="BINIS" msprop:OraDbType="126" type="xs:string" minOccurs="0"/><xs:element name="INIS" msprop:OraDbType="126" type="xs:string" minOccurs="0"/><xs:element name="SATILABLE" msprop:OraDbType="107" type="xs:decimal" minOccurs="0"/><xs:element name="GURSEFERFLAG" msprop:OraDbType="107" type="xs:decimal" minOccurs="0"/><xs:element name="ARAYOLDATE" msdata:DateTimeMode="Unspecified" msprop:OraDbType="106" type="xs:dateTime" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema><diffgr:diffgram xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><SEFERNO>080710</SEFERNO><GUZERGAH>BATUM-HOPA-RIZE-ANTALYA</GUZERGAH><JOURNEYDSC xml:space="preserve"> </JOURNEYDSC><STOPHOUR>02:00</STOPHOUR><ENDHOUR>10:30</ENDHOUR><KALANKOLTUK>38</KALANKOLTUK><EXTRASEFER xml:space="preserve"> </EXTRASEFER><BUSTYPE>SUIT</BUSTYPE><MULTITYPE>LIGTV|TV|INT</MULTITYPE><SIRANO1>48</SIRANO1><SIRANO2>56</SIRANO2><BUSDESCRIPTION>0,148,255</BUSDESCRIPTION><LINKOK>0</LINKOK><FIYAT>80</FIYAT><BEGINID>120073150</BEGINID><ENDID>120073158</ENDID><BEGINARAYOLID>15755530</BEGINARAYOLID><ENDARAYOLID>15755538</ENDARAYOLID><BUSDESCRIPTIONID>9475357</BUSDESCRIPTIONID><INTPRICE>70</INTPRICE><CARDPRICE>75</CARDPRICE><DISCOUNTPRICE>66.50</DISCOUNTPRICE><TARIH>2016-11-01T00:00:00</TARIH><BINIS>ANKARA</BINIS><INIS>ANTALYA</INIS><SATILABLE>22</SATILABLE><GURSEFERFLAG>1</GURSEFERFLAG><ARAYOLDATE>2016-11-02T00:00:00</ARAYOLDATE></Table><Table diffgr:id="Table2" msdata:rowOrder="1"><SEFERNO>554216</SEFERNO><GUZERGAH>SAMSUN-ANKARA-KONYA-ANTALYA[SUIT]</GUZERGAH><JOURNEYDSC xml:space="preserve"> </JOURNEYDSC><STOPHOUR>06:00</STOPHOUR><ENDHOUR>15:00</ENDHOUR><KALANKOLTUK>37</KALANKOLTUK><EXTRASEFER xml:space="preserve"> </EXTRASEFER><BUSTYPE>SUIT</BUSTYPE><MULTITYPE>LIGTV|TV|INT</MULTITYPE><SIRANO1>10</SIRANO1><SIRANO2>23</SIRANO2><BUSDESCRIPTION>0,148,255</BUSDESCRIPTION><LINKOK>0</LINKOK><FIYAT>80</FIYAT><BEGINID>117801517</BEGINID><ENDID>117801530</ENDID><BEGINARAYOLID>11020630</BEGINARAYOLID><ENDARAYOLID>11643732</ENDARAYOLID><BUSDESCRIPTIONID>16981712</BUSDESCRIPTIONID><INTPRICE>70</INTPRICE><CARDPRICE>75</CARDPRICE><DISCOUNTPRICE>66.50</DISCOUNTPRICE><TARIH>2016-11-01T00:00:00</TARIH><BINIS>ANKARA</BINIS><INIS>ANTALYA</INIS><SATILABLE>22</SATILABLE><GURSEFERFLAG>0</GURSEFERFLAG><ARAYOLDATE>2016-11-02T00:00:00</ARAYOLDATE></Table><Table diffgr:id="Table3" msdata:rowOrder="2"><SEFERNO>060768</SEFERNO><GUZERGAH>ANK-ANTALYA-FINIKE</GUZERGAH><JOURNEYDSC xml:space="preserve"> </JOURNEYDSC><STOPHOUR>09:30</STOPHOUR><ENDHOUR>17:30</ENDHOUR><KALANKOLTUK>37</KALANKOLTUK><EXTRASEFER xml:space="preserve"> </EXTRASEFER><BUSTYPE>SUIT</BUSTYPE><MULTITYPE>LIGTV|TV|INT</MULTITYPE><SIRANO1>1</SIRANO1><SIRANO2>10</SIRANO2><BUSDESCRIPTION>0,148,255</BUSDESCRIPTION><LINKOK>0</LINKOK><FIYAT>80</FIYAT><BEGINID>120700298</BEGINID><ENDID>120700307</ENDID><BEGINARAYOLID>19152871</BEGINARAYOLID><ENDARAYOLID>19152878</ENDARAYOLID><BUSDESCRIPTIONID>16981712</BUSDESCRIPTIONID><INTPRICE>70</INTPRICE><CARDPRICE>75</CARDPRICE><DISCOUNTPRICE>66.50</DISCOUNTPRICE><TARIH>2016-11-02T00:00:00</TARIH><BINIS>ANKARA</BINIS><INIS>ANTALYA</INIS><SATILABLE>22</SATILABLE><GURSEFERFLAG>0</GURSEFERFLAG><ARAYOLDATE>2016-11-02T00:00:00</ARAYOLDATE></Table><Table diffgr:id="Table4" msdata:rowOrder="3"><SEFERNO>060766</SEFERNO><GUZERGAH>ANK-ANTALYA-KEMER[SUIT]</GUZERGAH><JOURNEYDSC xml:space="preserve"> </JOURNEYDSC><STOPHOUR>13:30</STOPHOUR><ENDHOUR>21:00</ENDHOUR><KALANKOLTUK>37</KALANKOLTUK><EXTRASEFER xml:space="preserve"> </EXTRASEFER><BUSTYPE>SUIT</BUSTYPE><MULTITYPE>LIGTV|TV|INT</MULTITYPE><SIRANO1>2</SIRANO1><SIRANO2>10</SIRANO2><BUSDESCRIPTION>0,148,255</BUSDESCRIPTION><LINKOK>0</LINKOK><FIYAT>80</FIYAT><BEGINID>120704856</BEGINID><ENDID>120704864</ENDID><BEGINARAYOLID>19152841</BEGINARAYOLID><ENDARAYOLID>19152847</ENDARAYOLID><BUSDESCRIPTIONID>16981712</BUSDESCRIPTIONID><INTPRICE>70</INTPRICE><CARDPRICE>75</CARDPRICE><DISCOUNTPRICE>66.50</DISCOUNTPRICE><TARIH>2016-11-02T00:00:00</TARIH><BINIS>ANKARA</BINIS><INIS>ANTALYA</INIS><SATILABLE>22</SATILABLE><GURSEFERFLAG>0</GURSEFERFLAG><ARAYOLDATE>2016-11-02T00:00:00</ARAYOLDATE></Table><Table diffgr:id="Table5" msdata:rowOrder="4"><SEFERNO>674212</SEFERNO><GUZERGAH>ANK-ANTALYA (KONYA YOLU)</GUZERGAH><JOURNEYDSC xml:space="preserve"> </JOURNEYDSC><STOPHOUR>16:00</STOPHOUR><ENDHOUR>01:15</ENDHOUR><KALANKOLTUK>37</KALANKOLTUK><EXTRASEFER xml:space="preserve"> </EXTRASEFER><BUSTYPE>SUIT</BUSTYPE><MULTITYPE>LIGTV|TV|INT</MULTITYPE><SIRANO1>12</SIRANO1><SIRANO2>23</SIRANO2><BUSDESCRIPTION>0,148,255</BUSDESCRIPTION><LINKOK>0</LINKOK><FIYAT>80</FIYAT><BEGINID>119300548</BEGINID><ENDID>119300559</ENDID><BEGINARAYOLID>13611002</BEGINARAYOLID><ENDARAYOLID>21061295</ENDARAYOLID><BUSDESCRIPTIONID>16981712</BUSDESCRIPTIONID><INTPRICE>70</INTPRICE><CARDPRICE>75</CARDPRICE><DISCOUNTPRICE>66.50</DISCOUNTPRICE><TARIH>2016-11-02T00:00:00</TARIH><BINIS>ANKARA</BINIS><INIS>ANTALYA</INIS><SATILABLE>22</SATILABLE><GURSEFERFLAG>0</GURSEFERFLAG><ARAYOLDATE>2016-11-02T00:00:00</ARAYOLDATE></Table><Table diffgr:id="Table6" msdata:rowOrder="5"><SEFERNO>050717</SEFERNO><GUZERGAH>CORUM ANKARA ANTALYA</GUZERGAH><JOURNEYDSC xml:space="preserve"> </JOURNEYDSC><STOPHOUR>22:00</STOPHOUR><ENDHOUR>06:30</ENDHOUR><KALANKOLTUK>46</KALANKOLTUK><EXTRASEFER xml:space="preserve"> </EXTRASEFER><BUSTYPE>CLASS</BUSTYPE><MULTITYPE> |TV| </MULTITYPE><SIRANO1>14</SIRANO1><SIRANO2>22</SIRANO2><BUSDESCRIPTION>255,121,255</BUSDESCRIPTION><LINKOK>0</LINKOK><FIYAT>80</FIYAT><BEGINID>121624877</BEGINID><ENDID>121624885</ENDID><BEGINARAYOLID>17423059</BEGINARAYOLID><ENDARAYOLID>17423064</ENDARAYOLID><BUSDESCRIPTIONID>10403315</BUSDESCRIPTIONID><INTPRICE>70</INTPRICE><CARDPRICE>75</CARDPRICE><DISCOUNTPRICE>66.50</DISCOUNTPRICE><TARIH>2016-11-02T00:00:00</TARIH><BINIS>ANKARA</BINIS><INIS>ANTALYA</INIS><SATILABLE>22</SATILABLE><GURSEFERFLAG>0</GURSEFERFLAG><ARAYOLDATE>2016-11-02T00:00:00</ARAYOLDATE></Table><Table diffgr:id="Table7" msdata:rowOrder="6"><SEFERNO>740719</SEFERNO><GUZERGAH>AMASRA-BARTIN-ANK-ANTALYA</GUZERGAH><JOURNEYDSC xml:space="preserve"> </JOURNEYDSC><STOPHOUR>22:30</STOPHOUR><ENDHOUR>06:30</ENDHOUR><KALANKOLTUK>37</KALANKOLTUK><EXTRASEFER xml:space="preserve"> </EXTRASEFER><BUSTYPE>SUIT</BUSTYPE><MULTITYPE>LIGTV|TV|INT</MULTITYPE><SIRANO1>16</SIRANO1><SIRANO2>25</SIRANO2><BUSDESCRIPTION>0,148,255</BUSDESCRIPTION><LINKOK>0</LINKOK><FIYAT>80</FIYAT><BEGINID>117448689</BEGINID><ENDID>117448698</ENDID><BEGINARAYOLID>21717721</BEGINARAYOLID><ENDARAYOLID>21717728</ENDARAYOLID><BUSDESCRIPTIONID>16981712</BUSDESCRIPTIONID><INTPRICE>70</INTPRICE><CARDPRICE>75</CARDPRICE><DISCOUNTPRICE>66.50</DISCOUNTPRICE><TARIH>2016-11-02T00:00:00</TARIH><BINIS>ANKARA</BINIS><INIS>ANTALYA</INIS><SATILABLE>22</SATILABLE><GURSEFERFLAG>0</GURSEFERFLAG><ARAYOLDATE>2016-11-02T00:00:00</ARAYOLDATE></Table><Table diffgr:id="Table8" msdata:rowOrder="7"><SEFERNO>060739</SEFERNO><GUZERGAH>ANK-ANTALYA-FINIKE [SUIT]</GUZERGAH><JOURNEYDSC xml:space="preserve"> </JOURNEYDSC><STOPHOUR>23:00</STOPHOUR><ENDHOUR>06:30</ENDHOUR><KALANKOLTUK>37</KALANKOLTUK><EXTRASEFER xml:space="preserve"> </EXTRASEFER><BUSTYPE>SUIT</BUSTYPE><MULTITYPE>LIGTV|TV|INT</MULTITYPE><SIRANO1>1</SIRANO1><SIRANO2>10</SIRANO2><BUSDESCRIPTION>0,148,255</BUSDESCRIPTION><LINKOK>0</LINKOK><FIYAT>80</FIYAT><BEGINID>120702686</BEGINID><ENDID>120702695</ENDID><BEGINARAYOLID>13197386</BEGINARAYOLID><ENDARAYOLID>13197393</ENDARAYOLID><BUSDESCRIPTIONID>16981712</BUSDESCRIPTIONID><INTPRICE>70</INTPRICE><CARDPRICE>75</CARDPRICE><DISCOUNTPRICE>66.50</DISCOUNTPRICE><TARIH>2016-11-02T00:00:00</TARIH><BINIS>ANKARA</BINIS><INIS>ANTALYA</INIS><SATILABLE>22</SATILABLE><GURSEFERFLAG>0</GURSEFERFLAG><ARAYOLDATE>2016-11-02T00:00:00</ARAYOLDATE></Table><Table diffgr:id="Table9" msdata:rowOrder="8"><SEFERNO>377807</SEFERNO><GUZERGAH>ANK-ANTALYA-MANAVGAT</GUZERGAH><JOURNEYDSC xml:space="preserve"> </JOURNEYDSC><STOPHOUR>23:30</STOPHOUR><ENDHOUR>07:30</ENDHOUR><KALANKOLTUK>37</KALANKOLTUK><EXTRASEFER xml:space="preserve"> </EXTRASEFER><BUSTYPE>SUIT</BUSTYPE><MULTITYPE>LIGTV|TV|INT</MULTITYPE><SIRANO1>7</SIRANO1><SIRANO2>16</SIRANO2><BUSDESCRIPTION>0,148,255</BUSDESCRIPTION><LINKOK>0</LINKOK><FIYAT>80</FIYAT><BEGINID>118273970</BEGINID><ENDID>118273979</ENDID><BEGINARAYOLID>14935798</BEGINARAYOLID><ENDARAYOLID>14935805</ENDARAYOLID><BUSDESCRIPTIONID>16981712</BUSDESCRIPTIONID><INTPRICE>70</INTPRICE><CARDPRICE>75</CARDPRICE><DISCOUNTPRICE>66.50</DISCOUNTPRICE><TARIH>2016-11-02T00:00:00</TARIH><BINIS>ANKARA</BINIS><INIS>ANTALYA</INIS><SATILABLE>22</SATILABLE><GURSEFERFLAG>0</GURSEFERFLAG><ARAYOLDATE>2016-11-02T00:00:00</ARAYOLDATE></Table><Table diffgr:id="Table10" msdata:rowOrder="9"><SEFERNO>060741</SEFERNO><GUZERGAH>BOLU-ANKARA-ANTALYA[SUIT]</GUZERGAH><JOURNEYDSC xml:space="preserve"> </JOURNEYDSC><STOPHOUR>23:59</STOPHOUR><ENDHOUR>07:29</ENDHOUR><KALANKOLTUK>37</KALANKOLTUK><EXTRASEFER xml:space="preserve"> </EXTRASEFER><BUSTYPE>SUIT</BUSTYPE><MULTITYPE>LIGTV|TV|INT</MULTITYPE><SIRANO1>2</SIRANO1><SIRANO2>9</SIRANO2><BUSDESCRIPTION>0,148,255</BUSDESCRIPTION><LINKOK>0</LINKOK><FIYAT>80</FIYAT><BEGINID>120707600</BEGINID><ENDID>120707607</ENDID><BEGINARAYOLID>13197360</BEGINARAYOLID><ENDARAYOLID>13197367</ENDARAYOLID><BUSDESCRIPTIONID>16981712</BUSDESCRIPTIONID><INTPRICE>70</INTPRICE><CARDPRICE>75</CARDPRICE><DISCOUNTPRICE>66.50</DISCOUNTPRICE><TARIH>2016-11-02T00:00:00</TARIH><BINIS>ANKARA</BINIS><INIS>ANTALYA</INIS><SATILABLE>22</SATILABLE><GURSEFERFLAG>0</GURSEFERFLAG><ARAYOLDATE>2016-11-02T00:00:00</ARAYOLDATE></Table></NewDataSet></diffgr:diffgram></getJourneyListResult></getJourneyListResponse></s:Body></s:Envelope>';
$sXml = simplexml_load_string($xml);

$sXml->registerXPathNamespace('e', 'http://schemas.xmlsoap.org/soap/envelope/');
$bodyArray = $sXml->xpath('//e:Body');
$body = reset($bodyArray);

$namespaces = $body->getNameSpaces(true);
$body->registerXPathNamespace('d', 'urn:schemas-microsoft-com:xml-diffgram-v1');
foreach($body->xpath('descendant::d:diffgram') as $diff) {
    echo 'DIFF: ';
    print_r($diff);
}
*/
/*$body->registerXPathNamespace('d', 'urn:schemas-microsoft-com:xml-diffgram-v1');
foreach($body->xpath('d:diffgram') as $diff) {
    echo 'DIFF: ';
    print_r($diff);
}*/

/*$xml = '<s:Envelope xmlns:s="http://schemas.xmlsoap.org/soap/envelope/">
   <s:Body>
      <saveSeatsInfoResponse xmlns="http://tempuri.org/">
         <saveSeatsInfoResult>true</saveSeatsInfoResult>
      </saveSeatsInfoResponse>
   </s:Body>
</s:Envelope>';
$sXml = simplexml_load_string($xml);
$sXml ->registerXPathNamespace('e', 'http://schemas.xmlsoap.org/soap/envelope/');
foreach($sXml->xpath('//e:Body') as $body) {
    print_r($body);
}*/



/*
$xml = '<s:Envelope xmlns:s="http://schemas.xmlsoap.org/soap/envelope/">
   <s:Body>
      <soldSeatsResponse xmlns="http://tempuri.org/">
         <soldSeatsResult>false</soldSeatsResult>
         <errorMessage>Tanimsiz Banka Kodu</errorMessage>
      </soldSeatsResponse>
   </s:Body>
</s:Envelope>';

$sXml = simplexml_load_string($xml);
$sXml ->registerXPathNamespace('e', 'http://schemas.xmlsoap.org/soap/envelope/');
foreach($sXml->xpath('//e:Body') as $body) {
    print_r($body);
}
*/

/*$xml = '<s:Envelope xmlns:s="http://schemas.xmlsoap.org/soap/envelope/">
   <s:Body>
      <soldSeatsResponse xmlns="http://tempuri.org/">
         <soldSeatsResult>false</soldSeatsResult>
         <errorMessage>Tanimsiz Banka Kodu</errorMessage>
      </soldSeatsResponse>
   </s:Body>
</s:Envelope>';

$sXml = simplexml_load_string($xml);
$sXml->registerXPathNamespace('e', 'http://schemas.xmlsoap.org/soap/envelope/');
$bodyArray = $sXml->xpath('//e:Body');
foreach ($bodyArray as $body) {
    echo 'Just do nothing';
}*/

//print_r($body);

/*if ($body->xpath('descendant::errorMessage')) {
    echo 'CONTAINS ERROR';
}*/

//echo $body->soldSeatsResponse->errorMessage;
/*$errorMessages = $body->xpath('descendant::errorMessage');
foreach ($errorMessages as $error) { //Why this does not work???
    print_r($error);
}*/


/*echo $sXml->asXML();
//if ($sXml === false) {
    echo 'Parsing not successfull';
    foreach (libxml_get_errors() as $error) {
        echo $error.'<br>';
    }
//}

print_r($sXml);
*/


$xml = '<diffgram />';
$sXml = simplexml_load_string($xml);
if (!isset($sXml->NewDataSet->Table)) {
    echo 'Validation works';
}
