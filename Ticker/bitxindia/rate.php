<?php

$url = "https://btcxindia.com/api/ticker";
$json=json_decode(file_get_contents($url), true);
$price = $json["ticker"]["high"];
echo $price;

?>