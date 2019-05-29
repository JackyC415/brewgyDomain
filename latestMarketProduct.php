<?php 
require_once('dbConnection.php');

function curlProductUrl($url) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_exec($ch);
	curl_close($ch);
	return $url;
}

function displayTopFive() {
echo "<h1><u>Top Five Most Visited (Market Place)</u></h1>";
$cookie = unserialize($_COOKIE['mostVisitedProducts']);
/*verify cookie is an array, sort the array in descending order from highest counts
then slice first five indexes (top five products) and display each one in a loop*/
		 if (is_array($cookie)) {
			 arsort($cookie);
			 $topFive = array_slice($cookie,0,5);
				foreach($topFive as $key => $val) {
					 echo '<img src="'.$key.'"height="200" width="300"/>'.$val;
				}
		 }
}

$brewgy = array('http://brewgy.com/brewgyX.php'=>'images/droneImages/drone0.jpg', 
			  'http://brewgy.com/brewgyXI.php' => 'images/droneImages/drone1.jpg', 
			  'http://brewgy.com/brewgyXII.php' => 'images/droneImages/drone2.jpg', 
			  'http://brewgy.com/brewgyXIII.php' => 'images/droneImages/drone3.jpg',
			  'http://brewgy.com/brewgyXIV.php' => 'images/droneImages/drone4.jpg',
			  'http://brewgy.com/brewgyXV.php' => 'images/droneImages/drone5.jpg',
			  'http://brewgy.com/brewgyXVI.php' => 'images/droneImages/drone6.jpg',
			  'http://brewgy.com/brewgyXVII.php' => 'images/droneImages/drone7.jpg',
			  'http://brewgy.com/brewgyXVIII.php' => 'images/droneImages/drone8.jpg',
			  'http://brewgy.com/brewgyXVIX.php' => 'images/droneImages/drone9.jpg'
			  );

displayTopFive();
echo "<br>";

?>
<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Test</title>
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
   	<?php for($x = 1; $x <= 6; $x++) {  echo "Company: ".$x;?>
   	<div class="grid-container">
   		<?php foreach($brewgy as $key => $value) { ?>
   		<div class="grid-item">
  		<a href='<?php echo curlProductUrl($key);?>' target="_blank"><img src="<?php echo $value; ?>" height="200" width="300"></a>
  		</div>
  		<?php } ?>
   	</div>
   <?php } ?>

   </body>
 </html>
