<?php 
require_once('dbConnection.php');

/*$test = file_get_contents("http://brewgy.com/brewgyXIV.php");
echo "$test";*/

function topFiveMarket() {
	$topFiveMarket = mysqli_query($conn, "SELECT p_img FROM test_market ORDER BY p_views DESC LIMIT 0,5");
	echo "<h1>TOP FIVE PRODUCTS (MARKET PLACE)</h1>";
	while($row = mysqli_fetch_assoc($topFiveMarket)) {
		echo '<img src="'.$row['p_img'].'"height="200" width="300"/>';
	}
}

function topFiveSub($company) {
	$topFiveMarket = mysqli_query($conn, "SELECT p_img FROM test_market WHERE p_category = '$company' AND p_views > 0 ORDER BY p_views DESC LIMIT 0,5");
	echo "<h1>TOP FIVE $company</h1>";
	while($row = mysqli_fetch_assoc($topFiveMarket)) {
		echo '<img src="'.$row['p_img'].'"height="200" width="300"/>';
	}
}

	$topFiveMarket = mysqli_query($conn, "SELECT p_img FROM test_market ORDER BY p_views DESC LIMIT 0,5");
	echo "<h1>TOP FIVE PRODUCTS (MARKET PLACE)</h1>";
	while($row = mysqli_fetch_assoc($topFiveMarket)) {
		echo '<img src="'.$row['p_img'].'"height="200" width="300"/>';
	}

/*
topFiveSub('Brewgy');
topFiveSub('PokerFazeBook');
topFiveSub('Animatory');
topFiveSub('Stepic');
topFiveSub('CloudBook');
*/

	$topFiveMarket = mysqli_query($conn, "SELECT p_img FROM test_market WHERE p_category = 'Brewgy' ORDER BY p_views DESC LIMIT 0,5");
	echo "<h1>TOP FIVE BREWGY</h1>";
	while($row = mysqli_fetch_assoc($topFiveMarket)) {
		echo '<img src="'.$row['p_img'].'"height="200" width="300"/>';
	}

	$topFiveMarket = mysqli_query($conn, "SELECT p_img FROM test_market WHERE p_category = 'PokerFazeBook' AND p_views > 0 ORDER BY p_views DESC LIMIT 0,5");
	echo "<h1>TOP FIVE POKERFAZEBOOK</h1>";
	while($row = mysqli_fetch_assoc($topFiveMarket)) {
		echo '<img src="'.$row['p_img'].'"height="200" width="300"/>';
	}

	$topFiveMarket = mysqli_query($conn, "SELECT p_img FROM test_market WHERE p_category = 'Animatory' ORDER BY p_views DESC LIMIT 0,5");
	echo "<h1>TOP FIVE ANIMATORY</h1>";
	while($row = mysqli_fetch_assoc($topFiveMarket)) {
		echo '<img src="'.$row['p_img'].'"height="200" width="300"/>';
	}

	$topFiveMarket = mysqli_query($conn, "SELECT p_img FROM test_market WHERE p_category = 'Stepic' AND p_views > 0 ORDER BY p_views DESC LIMIT 0,5");
	echo "<h1>TOP FIVE STEPIC</h1>";
	while($row = mysqli_fetch_assoc($topFiveMarket)) {
		echo '<img src="'.$row['p_img'].'"height="200" width="300"/>';
	}

	$topFiveMarket = mysqli_query($conn, "SELECT p_img FROM test_market WHERE p_category = 'CloudBook' AND p_views > 0 ORDER BY p_views DESC LIMIT 0,5");
	echo "<h1>TOP FIVE CLOUDBOOK</h1>";
	while($row = mysqli_fetch_assoc($topFiveMarket)) {
		echo '<img src="'.$row['p_img'].'"height="200" width="300"/>';
	}

	$topFiveMarket = mysqli_query($conn, "SELECT p_img FROM test_market WHERE p_category = 'Leap' AND p_views > 0 ORDER BY p_views DESC LIMIT 0,5");
	echo "<h1>TOP FIVE LEAP</h1>";
	while($row = mysqli_fetch_assoc($topFiveMarket)) {
		echo '<img src="'.$row['p_img'].'"height="200" width="300"/>';
	}
	

/*$market = "CREATE TABLE IF NOT EXISTS test_market (id int(8) NOT NULL AUTO_INCREMENT PRIMARY KEY, p_category VARCHAR(50) NOT NULL, p_name VARCHAR(50) NOT NULL, p_views int(11) NOT NULL, p_link VARCHAR(100) NOT NULL,  p_img VARCHAR(100) NOT NULL)";
mysqli_query($conn, $market);*/

/*
//database table schema: 
$product = "CREATE TABLE IF NOT EXISTS p_market (id int(8) NOT NULL PRIMARY KEY, p_category VARCHAR(50), p_name VARCHAR(50), p_views int(11) NOT NULL, p_img LONGBLOB NOT NULL)";

//top five (market place) query:
$topFiveMarket = mysqli_query($conn, "SELECT p_img, COUNT(p_views) AS visits FROM p_market GROUP BY p_img ORDER BY visits DESC LIMIT 5");

if($topFive = mysqli_fetch_assoc($topFiveMarket)) {
		while($row = mysqli_fetch_assoc($topFive)) {
				echo $row['img'];
		}
}*/

		if(isset($_GET['id'])) {
		echo "ID: ".$_GET['id']." "."(view + 1)";
		$id = $_GET['id'];
		mysqli_query($conn, "UPDATE test_market SET p_views = p_views+1 WHERE id = '$id'");	
		}	

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
   	<form method="get" action="">
   		<div><h1>PRODUCTS AVAILABLE</h1></div>
   		<div class="grid-container">
   		<?php 
			$getProducts = mysqli_query($conn, "SELECT id, p_link, p_img FROM test_market");
	 		while($row = mysqli_fetch_array($getProducts)):; ?>
	 			<div class="grid-item">
	 			<a href='<?php echo $row['p_link']; ?>?id=<?php echo $row['id']; ?>'><img src="<?php echo $row['p_img']; ?>" height="200" width="300"></a>
	 			</div>
		<?php endwhile;
		?>
	</form>
   </body>
 </html>