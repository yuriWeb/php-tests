<?php
//Errors
libxml_use_internal_errors(true);
$reader = new XMLReader();
$reader->open('data/hotels_with_errors.xml');
while( $reader->read() ) {
    echo $reader->name . '<br>';
    echo $reader->readString() . '<br>';
}

print_r(libxml_get_errors());
libxml_clear_errors();



/**
$reader = new XMLReader();
$opened = $reader->open('data/not_existing_file.xml');
if (!$opened) {
echo 'not opened<br>';
}
 */

/*class Hotel {

}

function main() {
    $fileName = 'hotels.xml';
    $qualifiedFileName = 'data/' . $fileName;
    $reader = new XMLReader();
    $reader->open($qualifiedFileName);

    $hotel = null;
    while( $reader->read() ) {
        if (hotelStart($reader)) {
            echo 'hotel start<br>';
            $hotel = new Hotel();
        }

        if (!$hotel) {
            continue;
        }

        $reader->readString();
        if ($reader->name == 'Hotel') {
            $externalHotelId = $reader->getAttribute('HotelID');
        }

        if (hotelEnd($reader)) {
            echo 'hotel end<br>';
            yield $hotel;
            $hotel = null;
        }
    }
}

function hotelStart(XMLReader $reader) {
    if ($reader->name == 'Hotel' && $reader->nodeType == XMLReader::ELEMENT) {
        return true;
    }
    return false;
}

function hotelEnd(XMLReader $reader) {
    if ($reader->name == 'Hotel' && $reader->nodeType == XMLReader::END_ELEMENT) {
        return true;
    }
    return false;
}

foreach (main() as $hotel) {
    echo 'in cycle<br>';
}
*/