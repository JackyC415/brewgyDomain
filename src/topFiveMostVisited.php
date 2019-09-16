<?php 
echo "<h1>Top Five Most Visited Products (Brewgy)</h1>";

$cookie = unserialize($_COOKIE['mostVisitedProducts']);
   	if (is_array($cookie)) {
   		arsort($cookie);
   		$topFive = array_slice($cookie,0,5);
   		foreach($topFive as $key => $val) {
   			echo $key.": ".$val."<br>";
   		}
 	}

   echo "<h1>Other Five Domain Product Pages</h1>";
   foreach(array("http://pokerfazebook.com/Services.php", "http://maninderjitownwebsite.com/products.php", "http://www.shiyancai4213.com/product.php", "http://www.roopeshrai.com/products.php", "http://165.227.54.167/services.php") as $url) {
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$remoteUsers = curl_exec($curl);
		curl_close($curl);
		print($remoteUsers);
	}
?>