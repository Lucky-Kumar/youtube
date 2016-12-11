<?php
$ticker = file_get_contents ("http://data.mtgox.com/api/1/BTCgbp/ticker") ;
$ticker_decoded = json_decode ($ticker) ;
echo $ticker_decoded->return->avg->value ;
?>