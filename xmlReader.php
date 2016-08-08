<?php

//INCOMPLETE

class Hotel {

}

function main() {
    $fileName = 'hotels.xml';
    $qualifiedFileName = 'data/' . $fileName;
    $reader = new XMLReader();
    $reader->open($qualifiedFileName);

    while( $reader->read() ) {
        if ($reader->name == 'Hotel' && $reader->nodeType == XMLReader::ELEMENT) {
            parseHotel($reader);
        }

        if ($reader->name == 'Hotel' && $reader->nodeType == XMLReader::END_ELEMENT) {
            echo 'hotel parsed';
        }
    }
}

function parseHotel(XMLReader $reader) {
    $reader->HotelName
}
