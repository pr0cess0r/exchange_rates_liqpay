#!/usr/bin/php
<?php
$f = 'https://www.liqpay.com/exchanges/exchanges.cgi';
$x = simplexml_load_file($f);

ob_start();
foreach($x as $curr => $list) {
	echo 1 . " " . $curr . " =\n";
	
	foreach($list as $curr => $val)
		echo "\t" . $val . " " . $curr . "\n";
	
	echo "\n";
}
$res = ob_get_clean();

system('notify-send -u critical "' . $res . '"');
