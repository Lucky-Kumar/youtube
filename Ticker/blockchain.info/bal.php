<?php
$addr = "1EzwoHtiXB4iFwedPr49iywjZn2nnekhoj";
$balance = "https://blockchain.info/q/addressbalance/$addr";
$json = json_decode(file_get_contents($balance), true);

if($json==0)
	echo "Zero Satoshi";
else
	echo $addr." Has A Balance Of ".$json;
    
	echo "<hr>";
	
	$addr1 = "3EFFhhvXjrzXLZp2KZmpgS5ajn8tLzPUex";
$balance1 = "https://blockchain.info/q/addressbalance/$addr1";
$json1 = json_decode(file_get_contents($balance1), true);

if($json1==0)
	echo "Zero Satoshi";
else
	echo $addr1." Has A Balance Of ".$json1;
?>