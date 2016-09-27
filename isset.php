<?php

$arr = [];

//Works completely correct for multilevel arrays
if (isset($arr['webservice']['soap']['wsdl'])) {
    echo $arr['webservice']['soap']['wsdl'];
} else {
    echo "['webservice']['soap']['wsdl'] is not defined";
}