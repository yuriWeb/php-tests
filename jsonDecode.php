<?php
$data = '{
  "jsonapi": {
    "version": 1
  },
  "data": []
}';

$array = json_decode($data, true);
foreach ($array['data'] as $trip) {
    print_r($trip);
}

/*$placesJson = null;
$array = json_decode($placesJson, true);
var_dump($array);*/
