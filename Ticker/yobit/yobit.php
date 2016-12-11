<?php
$url = "https://yobit.net/api/3/info";
$json = json_decode(file_get_contents($url), true);
$price = $json["last"];
echo $price;
?>