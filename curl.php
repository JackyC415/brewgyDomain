<?php 
	include "myUsers.php";

	foreach(array("http://www.roopeshrai.com/myusers.php", "http://165.227.54.167/allUsers.php") as $url) {
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$remoteUsers = curl_exec($curl);
		curl_close($curl);
		print($remoteUsers);
	}
	
 ?>