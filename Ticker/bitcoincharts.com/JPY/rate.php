<?php
foreach(json_decode(file_get_contents("http://api.bitcoincharts.com/v1/markets.json")) as $item)
if($item->symbol == 'coincheckJPY')
	break;
printf("<pre>\nLast:\t%s\nHight:\t%s\nLow:\t%s\nAvg:\t%s\nVol:\t%s\n</pre>",
 $item->latest_trade,
 $item->high,
 $item->low,
 $item->avg,
 $item->volume);

?>
