<html>
<body>
<h1> BTC / ETH </h1>
<br/>
<?php

$url = "https://btc-e.com/api/2/eth_btc/ticker";
$json = json_decode(file_get_contents($url), true);

$high = $json["ticker"]["high"];
$low = $json["ticker"]["low"];
$avg = $json["ticker"]["avg"];
$vol = $json["ticker"]["vol"];
$vol_cur = $json["ticker"]["vol_cur"];
$price = $json["ticker"]["last"];
$buy = $json["ticker"]["buy"];
$sell = $json["ticker"]["sell"];
$updated = $json["ticker"]["updated"];
$server_time = $json["ticker"]["server_time"];

echo "<br/>";
echo "HIGH : ".$high;
echo "<br/>";
echo "LOW : ".$low;
echo "<br/>";
echo "AVERAGE : ".$avg;
echo "<br/>";
echo "VOLUME : ".$vol;
echo "<br/>";
echo "VOLUME (CURRENCY) : ".$vol_cur;
echo "<br/>";
echo "PRICE : ".$price;
echo "<br/>";
echo "BUY : ".$buy;
echo "<br/>";
echo "SELL : ".$sell;
echo "<br/>";
echo "UPDATED ON : ".$updated;
echo "<br/>";
echo "SERVER TIME : ".$server_time;

?>
</body>
</html>