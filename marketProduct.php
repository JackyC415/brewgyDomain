<?php 
require_once('dbConnection.php');

function curlProductUrl($url) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_exec($ch);
	curl_close($ch);
}

if(isset($_GET['http://brewgy.com/brewgyX.php'])) curlProductUrl("http://brewgy.com/brewgyX.php");
else if (isset($_GET['http://brewgy.com/brewgyXI.php'])) curlProductUrl("http://brewgy.com/brewgyXI.php");
else if (isset($_GET['http://brewgy.com/brewgyXII.php'])) curlProductUrl("http://brewgy.com/brewgyXII.php");
else if (isset($_GET['http://brewgy.com/brewgyXIII.php'])) curlProductUrl("http://brewgy.com/brewgyXIII.php");
else if (isset($_GET['http://brewgy.com/brewgyXIV.php'])) curlProductUrl("http://brewgy.com/brewgyXIV.php");
else if (isset($_GET['http://brewgy.com/brewgyXV.php'])) curlProductUrl("http://brewgy.com/brewgyXV.php");
else if (isset($_GET['http://brewgy.com/brewgyXVI.php'])) curlProductUrl("http://brewgy.com/brewgyXVI.php");
else if (isset($_GET['http://brewgy.com/brewgyXVII.php'])) curlProductUrl("http://brewgy.com/brewgyXVII.php");
else if (isset($_GET['http://brewgy.com/brewgyXVIII.php'])) curlProductUrl("http://brewgy.com/brewgyXVIII.php");
else if (isset($_GET['http://brewgy.com/brewgyXVIX.php'])) curlProductUrl("http://brewgy.com/brewgyXVIX.php");

echo "<h1><u>Top Five Most Visited (Market Place)</u></h1>";          	 
       	$cookie = unserialize($_COOKIE['mostVisitedProducts']);
   			 if (is_array($cookie)) {
   				 arsort($cookie);
   				 $topFive = array_slice($cookie,0,5);
   					foreach($topFive as $key => $val) {
   						 echo '<img src="'.$key.'"/>'.$val;
   					}
   			} 
?>
<!DOCTYPE html>
<!--Reference: https://www.w3schools.com/css/css_grid_container.asp -->
<html>
<head>
<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  background-color: #2196F3;
  padding: 10px;
}
.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  text-align: center;
}
</style>
</head>
<body>

<h1><u>Company 1</u></h1>

<div class="grid-container">
  <div 
  class="grid-item"><a href="http://brewgy.com/brewgyX.php" target="_blank"><img src="images/droneImages/drone0.jpg"></a>
  	<h5>BrewgyX</h5>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXI.php" target="_blank"><img src="images/droneImages/drone1.jpg"></a>
  	<h5>BrewgyXI</h5>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXII.php" target="_blank"><img src="images/droneImages/drone2.jpg"></a>
  	<h5>BrewgyXII</h5>
  </div>  
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXIII.php" target="_blank"><img src="images/droneImages/drone3.jpg"></a>
  	<h5>BrewgyXIII</h5>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXIV.php" target="_blank"><img src="images/droneImages/drone4.jpg"></a>
  	<h5>BrewgyXIV</h5>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXV.php" target="_blank"><img src="images/droneImages/drone5.jpg"></a>
  	<h5>BrewgyXV</h5>
  </div>  
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXVI.php" target="_blank"><img src="images/droneImages/drone6.jpg"></a>
  	<h5>BrewgyXVI</h5>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXVII.php" target="_blank"><img src="images/droneImages/drone7.jpg"></a>
  	<h5>BrewgyXVII</h5>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXVIII.php" target="_blank"><img src="images/droneImages/drone8.jpg"></a>
  	<h5>BrewgyXVIII</h5>
  </div> 
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXVIX.php" target="_blank"><img src="images/droneImages/drone9.jpg"></a>
  	<h5>BrewgyXVIX</h5>
  </div> 
  <div class="grid-item">
  	<a href="http://brewgy.com/product.php"><h3>Visit Company A<h3></a>
  </div>
  <div class="grid-item">
  	<a href="https://www.youtube.com/watch?v=ntJNaupZovg"><h3>Get Me Outta Here<h3></a>
  </div>
</div>

<h1><u>Company 2</u></h1>

<div class="grid-container">
  <div 
  class="grid-item"><a href="http://brewgy.com/brewgyX.php" target="_blank"><img src="images/droneImages/drone0.jpg"></a>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXI.php" target="_blank"><img src="images/droneImages/drone1.jpg"></a>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXII.php" target="_blank"><img src="images/droneImages/drone2.jpg"></a>
  </div>  
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXIII.php" target="_blank"><img src="images/droneImages/drone3.jpg"></a>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXIV.php" target="_blank"><img src="images/droneImages/drone4.jpg"></a>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXV.php" target="_blank"><img src="images/droneImages/drone5.jpg"></a>
  </div>  
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXVI.php" target="_blank"><img src="images/droneImages/drone6.jpg"></a>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXVII.php" target="_blank"><img src="images/droneImages/drone7.jpg"></a>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXVIII.php" target="_blank"><img src="images/droneImages/drone8.jpg"></a>
  </div>  
</div>

<h1><u>Company 3</u></h1>

<div class="grid-container">
  <div 
  class="grid-item"><a href="http://brewgy.com/brewgyX.php" target="_blank"><img src="images/droneImages/drone0.jpg"></a>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXI.php" target="_blank"><img src="images/droneImages/drone1.jpg"></a>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXII.php" target="_blank"><img src="images/droneImages/drone2.jpg"></a>
  </div>  
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXIII.php" target="_blank"><img src="images/droneImages/drone3.jpg"></a>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXIV.php" target="_blank"><img src="images/droneImages/drone4.jpg"></a>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXV.php" target="_blank"><img src="images/droneImages/drone5.jpg"></a>
  </div>  
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXVI.php" target="_blank"><img src="images/droneImages/drone6.jpg"></a>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXVII.php" target="_blank"><img src="images/droneImages/drone7.jpg"></a>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXVIII.php" target="_blank"><img src="images/droneImages/drone8.jpg"></a>
  </div>  
</div>

<h1><u>Company 4</u></h1>

<div class="grid-container">
  <div 
  class="grid-item"><a href="http://brewgy.com/brewgyX.php" target="_blank"><img src="images/droneImages/drone0.jpg"></a>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXI.php" target="_blank"><img src="images/droneImages/drone1.jpg"></a>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXII.php" target="_blank"><img src="images/droneImages/drone2.jpg"></a>
  </div>  
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXIII.php" target="_blank"><img src="images/droneImages/drone3.jpg"></a>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXIV.php" target="_blank"><img src="images/droneImages/drone4.jpg"></a>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXV.php" target="_blank"><img src="images/droneImages/drone5.jpg"></a>
  </div>  
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXVI.php" target="_blank"><img src="images/droneImages/drone6.jpg"></a>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXVII.php" target="_blank"><img src="images/droneImages/drone7.jpg"></a>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXVIII.php" target="_blank"><img src="images/droneImages/drone8.jpg"></a>
  </div>  
</div>

<h1><u>Company 5</u></h1>

<div class="grid-container">
  <div 
  class="grid-item"><a href="http://brewgy.com/brewgyX.php" target="_blank"><img src="images/droneImages/drone0.jpg"></a>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXI.php" target="_blank"><img src="images/droneImages/drone1.jpg"></a>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXII.php" target="_blank"><img src="images/droneImages/drone2.jpg"></a>
  </div>  
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXIII.php" target="_blank"><img src="images/droneImages/drone3.jpg"></a>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXIV.php" target="_blank"><img src="images/droneImages/drone4.jpg"></a>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXV.php" target="_blank"><img src="images/droneImages/drone5.jpg"></a>
  </div>  
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXVI.php" target="_blank"><img src="images/droneImages/drone6.jpg"></a>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXVII.php" target="_blank"><img src="images/droneImages/drone7.jpg"></a>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXVIII.php" target="_blank"><img src="images/droneImages/drone8.jpg"></a>
  </div>  
</div>

<h1><u>Company 6</u></h1>

<div class="grid-container">
  <div 
  class="grid-item"><a href="http://brewgy.com/brewgyX.php" target="_blank"><img src="images/droneImages/drone0.jpg"></a>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXI.php" target="_blank"><img src="images/droneImages/drone1.jpg"></a>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXII.php" target="_blank"><img src="images/droneImages/drone2.jpg"></a>
  </div>  
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXIII.php" target="_blank"><img src="images/droneImages/drone3.jpg"></a>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXIV.php" target="_blank"><img src="images/droneImages/drone4.jpg"></a>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXV.php" target="_blank"><img src="images/droneImages/drone5.jpg"></a>
  </div>  
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXVI.php" target="_blank"><img src="images/droneImages/drone6.jpg"></a>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXVII.php" target="_blank"><img src="images/droneImages/drone7.jpg"></a>
  </div>
  <div class="grid-item">
  	<a href="http://brewgy.com/brewgyXVIII.php" target="_blank"><img src="images/droneImages/drone8.jpg"></a>
  </div>  
</div>

</body>
</html>
