<?php
$url = "https://bitpay.com/api/rates/inr/";
$json = json_decode(file_get_contents($url), true);
$price = $json["rate"];
echo "1 BTC To INR Rate : ".$price;
?>