<?php
$raw=file_get_contents("https://blockchain.info/ticker");
                $obj = json_decode($raw, true);
                $currency = $obj['USD'];
                $rate = $obj['USD']['last'];
                $rate2=$obj['USD']['24h'];
                $rate3 = $obj['USD']['15m'];
                 ?>
                <br>
<p> 1 BTC Last Rate = $ <?php echo $rate;?> USD </p>
<p> 15 minutes delayed market price = $ <?php echo $rate3;?> USD    </p>
<p> Last 24 hours average price = $
<?php echo $rate2;?> USD  </p>
