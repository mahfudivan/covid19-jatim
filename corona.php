<?php
	$ch = curl_init ("https://covid19dev.jatimprov.go.id/xweb/draxi");;
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$page = curl_exec($ch);

	preg_match('#<table[^>]*>(.+?)</table>#is', $page, $matches);
	foreach ($matches as &$match) {
	    $match = $match;
	}
	echo "<pre>";
	print_r ($matches[1]);
	echo "</pre>";
?>