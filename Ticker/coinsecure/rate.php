<?php
foreach(json_decode(file_get_contents(" https://api.coinsecure.in/v0/auth/alluserbids")) as $item)
if($item->symbol == 'localbtcUSD')
	break;
printf("<pre>\network total:\t%s\nHight:\t%s\nLow:\t%s\nAvg:\t%s\nVol:\t%s\n</pre>",
 $item->latest_trade,
 $item->high,
 $item->low,
 $item->avg,
 $item->volume);
?>
