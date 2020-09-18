<?php

#importing the appropriate packages
include("openCage/AbstractGeocoder.php");
include("openCage/Geocoder.php");

#Sending the request and receiving the response
$geocoder = new \OpenCage\Geocoder\Geocoder('fae16bd1820142678f69cac1910d342e');
$result = $geocoder->geocode('23, rue Henri Barbusse, Paris');

#Dealing with the response
header('Content-type: application/json; charset=UTF-8');
echo json_encode($result['results'], JSON_UNESCAPED_UNICODE)



?>
