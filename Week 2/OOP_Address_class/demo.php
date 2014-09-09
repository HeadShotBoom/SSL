<?php
require 'class.Address.inc';

echo '<h2>Instantiating Address</h2>';
$address = new Address;

echo '<h2>Empty Address</h2>';
echo '<tt><pre>' . var_export($address, TRUE) . '</pre></tt>';

echo '<h2>Setting Properties...</h2>';
$address -> street_address_1 = '147 Treasure Way';
$address -> city_name = 'San Antonio';
$address -> subdivision_name = 'Alamo Heights';
$address -> postal_code = '78209';
$address -> country_name = 'Merica';

echo '<tt><pre>' . var_export($address, TRUE) . '</pre></tt>';

echo '<h2>Displaying Address...</h2>';
echo $address->display();
?>