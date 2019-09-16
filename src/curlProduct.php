<?php 
require_once('dbConnection.php');

function curlProductPage($pageURL) {
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $pageURL);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$remoteUsers = curl_exec($curl);
	curl_close($curl);
	print($remoteUsers);
}

?>