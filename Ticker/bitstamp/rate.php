<?php
$url = "https://www.bitstamp.net/api/ticker/";
$json = json_decode(file_get_contents($url), true);
$price = $json["last"];
echo $price;
?>