<?php
echo preg_replace('/(<ARAYOLDATE>)(.*?)(<\/ARAYOLDATE>)/', '${1}1111${3}', '<ARAYOLDATE>2016-11-02T00:00:00</ARAYOLDATE>');

