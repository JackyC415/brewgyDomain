<?php
require_once('dbConnection.php');
require('setCookie.php');

try {
	/*
$product = "CREATE TABLE IF NOT EXISTS product_market (id int(8) NOT NULL PRIMARY KEY, name VARCHAR(5), category VARCHAR(50), views int(11) NOT NULL, img LONGBLOB NOT NULL)";
mysqli_query($conn, $product);
$brewgy = "INSERT INTO product_market (id, name, category, views, img) VALUES
('1','BrewgyX','Brewgy','0', 'images/droneImages/drone0.jpg'),
('2','BrewgyXI','Brewgy','0', 'images/droneImages/drone1.jpg'),
('3','BrewgyXII','Brewgy','0', 'images/droneImages/drone2.jpg'),
('4','BrewgyX','Brewgy','0', 'images/droneImages/drone3.jpg'),
('5','BrewgyX','Brewgy','0', 'images/droneImages/drone4.jpg'),
('6','BrewgyX','Brewgy','0', 'images/droneImages/drone5.jpg'),
('7','BrewgyX','Brewgy','0', 'images/droneImages/drone6.jpg'),
('8','BrewgyX','Brewgy','0', 'images/droneImages/drone7.jpg'),
('9','BrewgyX','Brewgy','0', 'images/droneImages/drone8.jpg'),
('10','BrewgyX','Brewgy','0', 'images/droneImages/drone9.jpg')";
mysqli_query($conn, $brewgy);*/

/*
$animatory = "INSERT INTO product_market (id, name, category, views, img) VALUES ('2','test','animatory', '0')";
$pokerfazebook = "INSERT INTO product_market (id, name, category, views, img) VALUES ('1','pokerfazebook','0')";
$leap = "INSERT INTO product_market (id, name, category, views, img) VALUES ('6','test','leap', '0')";
$cloudbook = "INSERT INTO product_market (id, name, category, views, img) VALUES ('5','test','cloudbook', '0')";
$stepic = "INSERT INTO product_market (id, name, category, views, img) VALUES ('3','test','stepic', '0')";
*/
} catch(Exception $e) {
	$e->getMessage();
}

function curlProductUrl($url) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$output = curl_exec($ch);
	curl_close($ch);
	echo $output;
}

$topFive = mysqli_query($conn, "SELECT img, COUNT(views) AS cnt FROM product_market GROUP BY img ORDER BY cnt DESC LIMIT 5");
$row = mysqli_fetch_assoc($topFive);

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

<form action="" method="get">





<div class="grid-container">
  <div
  class="grid-item"><a href="marketProduct.php?id=http://brewgy.com/brewgyX.php" target="_blank"><img src="images/droneImages/drone0.jpg"></a>
  	<h5>BrewgyX</h5>
 </div>
  <div class="grid-item">
  	<a href='marketProduct.php?id='http://brewgy.com/brewgyXI.php''; ?>' target="_blank"><img src="images/droneImages/drone1.jpg"></a>
  	<h5>BrewgyXI</h5>
  </div>
  <div class="grid-item">
  	<a href='<?php  echo curlProductUrl('http://brewgy.com/brewgyXII.php'); ?>' target="_blank"><img src="images/droneImages/drone2.jpg"></a>
  	<h5>BrewgyXII</h5>
  </div>
  <div class="grid-item">
  	<a href='<?php echo curlProductUrl('http://brewgy.com/brewgyXIII.php'); ?>' target="_blank"><img src="images/droneImages/drone3.jpg"></a>
  	<h5>BrewgyXIII</h5>
  </div>
  <div class="grid-item">
  	<a href='<?php echo curlProductUrl('http://brewgy.com/brewgyXIV.php'); ?>' target="_blank"><img src="images/droneImages/drone4.jpg"></a>
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
</form>

<h1><u>Company 2</u></h1>

<div class="grid-container">
  <div
  class="grid-item"><a href='<?php echo curlProductUrl('http://brewgy.com/testcookie.php');?>' target="_blank"><img src="http://maninderjitownwebsite.com/images/cgi.jpg" height="200" width="300"></a>
  </div>
  <div class="grid-item">
  <a href='<?php echo curlProductUrl('http://maninderjitownwebsite.com/products/album_art_creation.php'); ?>' target="_blank"><img src="http://maninderjitownwebsite.com/images/albumArt.jpg" height="200" width="300"></a>
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

<?php
echo "<h1><u>Top Five Most Visited (Market Place)</u></h1>";
$cookie = unserialize($_COOKIE['mostVisitedProducts']);
/*check to see if cookie is an array, sort the array in descending order from highest counts
then slice first five indexes (top five) and display each one in a loop*/
		 if (is_array($cookie)) {
			 arsort($cookie);
			 $topFive = array_slice($cookie,0,5);
				foreach($topFive as $key => $val) {
					 echo '<img src="'.$key.'"height="300" width="500"/>'.$val;
				}
		 }
?>

</body>
</html>
