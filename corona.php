<?php  
	echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
			  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>';

	$ch = curl_init ("https://covid19dev.jatimprov.go.id/xweb/draxi");;
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$page = curl_exec($ch);

	preg_match('#<table[^>]*>(.+?)</table>#is', $page, $matches);
	foreach ($matches as &$match) {
	    $match = $match;
	}
	echo '<div class="container mt-5">
			<table class="table table-hover">'.
				$matches[1]
			.'</table>
		  </div>';
?>