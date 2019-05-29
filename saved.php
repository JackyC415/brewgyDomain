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
/*Sort cookie array in descending order from highest counts then slice first five indexes (top five products) and loop through each product to render*/
	arsort($cookie);
	$topFive = array_slice($cookie,0,5);
	foreach($topFive as $key => $val) {
		echo '<img src="'.$key.'"height="200" width="300"/>'.$val;
	}
}

/*
$market = "CREATE TABLE IF NOT EXISTS test_market (id int(8) NOT NULL AUTO_INCREMENT PRIMARY KEY, p_category VARCHAR(50) NOT NULL, p_name VARCHAR(50) NOT NULL, p_views int(11) NOT NULL, p_link VARCHAR(100) NOT NULL,  p_img VARCHAR(100) NOT NULL)";
mysqli_query($conn, $market);

$productUrl = "INSERT INTO test_market (p_category, p_name, p_views, p_link, p_img) 
		VALUES ('Brewgy', 'BrewgyX', '0', 'http://brewgy.com/brewgyX.php', 'http://brewgy.com/images/droneImages/drone0.jpg'),
		('Brewgy', 'BrewgyXI', '0', 'http://brewgy.com/brewgyXI.php', 'http://brewgy.com/images/droneImages/drone1.jpg'),
		('Brewgy', 'BrewgyXII', '0', 'http://brewgy.com/brewgyXII.php', 'http://brewgy.com/images/droneImages/drone2.jpg'),
		('Brewgy', 'BrewgyXIII', '0', 'http://brewgy.com/brewgyXIII.php', 'http://brewgy.com/images/droneImages/drone3.jpg'),
		('Brewgy', 'BrewgyXIV', '0', 'http://brewgy.com/brewgyXIV.php', 'http://brewgy.com/images/droneImages/drone4.jpg'),
		('Brewgy', 'BrewgyXV', '0', 'http://brewgy.com/brewgyXV.php', 'http://brewgy.com/images/droneImages/drone5.jpg'),
		('Brewgy', 'BrewgyXVI', '0', 'http://brewgy.com/brewgyXVI.php', 'http://brewgy.com/images/droneImages/drone6.jpg'),
		('Brewgy', 'BrewgyXVII', '0', 'http://brewgy.com/brewgyXVII.php', 'http://brewgy.com/images/droneImages/drone7.jpg'),
		('Brewgy', 'BrewgyXVIII', '0', 'http://brewgy.com/brewgyXVIII.php', 'http://brewgy.com/images/droneImages/drone8.jpg'),
		('Brewgy', 'BrewgyXVIX', '0', 'http://brewgy.com/brewgyXVIX.php', 'http://brewgy.com/images/droneImages/drone9.jpg')";
mysqli_query($conn, $productUrl);
$productUrl = "INSERT INTO test_market (p_category, p_name, p_views, p_link, p_img) 
		VALUES 
		('Animatory', 'cgi', '0', 'http://maninderjitownwebsite.com/products/cgi_creation.php', 'http://maninderjitownwebsite.com/images/cgi.jpg'),
		('Animatory', 'aac', '0', 'http://maninderjitownwebsite.com/products/album_art_creation.php', 'http://maninderjitownwebsite.com/images/albumArt.jpg'),
		('Animatory', 'mpc', '0', 'http://maninderjitownwebsite.com/products/movie_poster_creation.php', 'http://maninderjitownwebsite.com/images/moviePoster.jpg'),
		('Animatory', '2sc', '0', 'http://maninderjitownwebsite.com/products/2dsprites_creation.php', 'http://maninderjitownwebsite.com/images/robotSprite.jpg'),
		('Animatory', '3dcm', '0', 'http://maninderjitownwebsite.com/products/3dcharacter_modeling.php', 'http://maninderjitownwebsite.com/images/3dCharacter.jpg'),
		('Animatory', '8bvmsd', '0', 'http://maninderjitownwebsite.com/products/8bit_video_game_sound_design.php', 'http://maninderjitownwebsite.com/images/8bitSound.jpg'),
		('Animatory', 'mvgsd', '0', 'http://maninderjitownwebsite.com/products/modern_video_game_sound_design.php', 'http://maninderjitownwebsite.com/images/modernGames.jpg'),
		('Animatory', 'cac', '0', 'http://maninderjitownwebsite.com/products/claymation_animation_creation.php', 'http://maninderjitownwebsite.com/images/claymation.jpg'),
		('Animatory', '2da', '0', 'http://maninderjitownwebsite.com/products/2d_animation.php', 'http://maninderjitownwebsite.com/images/2dAnimation.jpg'),
		('Animatory', '3da', '0', 'http://maninderjitownwebsite.com/products/3d_animation.php', 'http://maninderjitownwebsite.com/images/3dAnimation.jpg')";
$productUrl = "INSERT INTO test_market (p_category, p_name, p_views, p_link, p_img) 
		VALUES 
		('Leap', 'service0', '0', 'http://165.227.54.167/services/service_0.php', 'https://images.pexels.com/photos/2127021/pexels-photo-2127021.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260'),
		('Leap', 'service1', '0', 'http://165.227.54.167/services/service_1.php', 'https://images.pexels.com/photos/2127021/pexels-photo-2127021.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260'),
		('Leap', 'service2', '0', 'http://165.227.54.167/services/service_2.php', 'https://images.pexels.com/photos/2127021/pexels-photo-2127021.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260'),
		('Leap', 'service3', '0', 'http://165.227.54.167/services/service_3.php', 'https://images.pexels.com/photos/2127021/pexels-photo-2127021.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260'),
		('Leap', 'service4', '0', 'http://165.227.54.167/services/service_4.php', 'https://images.pexels.com/photos/2127021/pexels-photo-2127021.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260'),
		('Leap', 'service5', '0', 'http://165.227.54.167/services/service_5.php', 'https://images.pexels.com/photos/2127021/pexels-photo-2127021.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260'),
		('Leap', 'service6', '0', 'http://165.227.54.167/services/service_6.php', 'https://images.pexels.com/photos/2127021/pexels-photo-2127021.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260'),
		('Leap', 'service7', '0', 'http://165.227.54.167/services/service_7.php', 'https://images.pexels.com/photos/2127021/pexels-photo-2127021.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260'),
		('Leap', 'service8', '0', 'http://165.227.54.167/services/service_8.php', 'https://images.pexels.com/photos/2127021/pexels-photo-2127021.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260'),
		('Leap', 'service9', '0', 'http://165.227.54.167/services/service_9.php', 'https://images.pexels.com/photos/2127021/pexels-photo-2127021.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260')";

$productUrl = "INSERT INTO test_market (p_category, p_name, p_views, p_link, p_img) 
		VALUES 
		('CloudBook', 'book0', '0', 'http://www.roopeshrai.com/market_cb_editor.php', 'http://www.roopeshrai.com/photos/editor.jpg'),
		('CloudBook', 'book1', '0', 'http://www.roopeshrai.com/market_cb_editor.php', 'http://www.roopeshrai.com/photos/editor.jpg'),
		('CloudBook', 'book2', '0', 'http://www.roopeshrai.com/market_cb_editor.php', 'http://www.roopeshrai.com/photos/editor.jpg'),
		('CloudBook', 'book3', '0', 'http://www.roopeshrai.com/market_cb_editor.php', 'http://www.roopeshrai.com/photos/editor.jpg'),
		('CloudBook', 'book4', '0', 'http://www.roopeshrai.com/market_cb_editor.php', 'http://www.roopeshrai.com/photos/editor.jpg'),
		('CloudBook', 'book5', '0', 'http://www.roopeshrai.com/market_cb_editor.php', 'http://www.roopeshrai.com/photos/editor.jpg'),
		('CloudBook', 'book6', '0', 'http://www.roopeshrai.com/market_cb_editor.php', 'http://www.roopeshrai.com/photos/editor.jpg'),
		('CloudBook', 'book7', '0', 'http://www.roopeshrai.com/market_cb_editor.php', 'http://www.roopeshrai.com/photos/editor.jpg'),
		('CloudBook', 'book8', '0', 'http://www.roopeshrai.com/market_cb_editor.php', 'http://www.roopeshrai.com/photos/editor.jpg'),
		('CloudBook', 'book9', '0', 'http://www.roopeshrai.com/market_cb_editor.php', 'http://www.roopeshrai.com/photos/editor.jpg')";

$productUrl = "INSERT INTO test_market (p_category, p_name, p_views, p_link, p_img) 
		VALUES 
		('Stepic', 'gta', '0', 'http://www.shiyancai4213.com/gta.php', 'http://www.shiyancai4213.com/img/gta.jpg'),
		('Stepic', 'ac4', '0', 'http://www.shiyancai4213.com/ac4.php', 'images/kitty.png'),
		('Stepic', 'civilization', '0', 'http://www.shiyancai4213.com/civilization.php', 'http://www.shiyancai4213.com/img/civilization.jpg'),
		('Stepic', 'DynastyWarrior8', '0', 'http://www.shiyancai4213.com/DynastyWarriors8.php', 'http://www.shiyancai4213.com/img/DynastyWarriors8.jpg'),
		('Stepic', 'gow4', '0', 'http://www.shiyancai4213.com/gow4.php', 'http://www.shiyancai4213.com/img/God_of_War_4.jpg'),
		('Stepic', 'Left4Dead2', '0', 'http://www.shiyancai4213.com/Left4Dead2.php', 'http://www.shiyancai4213.com/img/Left4Dead2.php'),
		('Stepic', 'mhw', '0', 'http://www.shiyancai4213.com/mhw.php', 'http://www.shiyancai4213.com/img/Monster_Hunter_World_cover_art.jpg'),
		('Stepic', 'Nier_Automata', '0', 'http://www.shiyancai4213.com/Nier_Automata.php', 'images/kitty.png'),
		('Stepic', 'rdr2', '0', 'http://www.shiyancai4213.com/rdr2.php', 'http://www.shiyancai4213.com/img/Red_Dead_Redemption_II.jpg'),
		('Stepic', 'witcher3', '0', 'http://www.shiyancai4213.com/witcher3.php', 'http://www.shiyancai4213.com/img/Witcher_3_cover_art.jpg')";

$productUrl = "INSERT INTO test_market (p_category, p_name, p_views, p_link, p_img) 
		VALUES 
		('PokerFazeBook', 'product1', '0', 'http://pokerfazebook.com/index.php?product1', 'http://pokerfazebook.com/images/product1.png'),
		('PokerFazeBook', 'product2', '0', 'http://pokerfazebook.com/index.php?product2', 'http://pokerfazebook.com/images/product2.png'),
		('PokerFazeBook', 'product3', '0', 'http://pokerfazebook.com/index.php?product3', 'http://pokerfazebook.com/images/product3.png'),
		('PokerFazeBook', 'product4', '0', 'http://pokerfazebook.com/index.php?product4', 'http://pokerfazebook.com/images/product4.png'),
		('PokerFazeBook', 'product5', '0', 'http://pokerfazebook.com/index.php?product5', 'http://pokerfazebook.com/images/product5.png'),
		('PokerFazeBook', 'product6', '0', 'http://pokerfazebook.com/index.php?product6', 'http://pokerfazebook.com/images/product6.png'),
		('PokerFazeBook', 'product7', '0', 'http://pokerfazebook.com/index.php?product7', 'http://pokerfazebook.com/images/product7.png'),
		('PokerFazeBook', 'product8', '0', 'http://pokerfazebook.com/index.php?product8', 'http://pokerfazebook.com/images/product8.png'),
		('PokerFazeBook', 'product9', '0', 'http://pokerfazebook.com/index.php?product9', 'http://pokerfazebook.com/images/product9.png'),
		('PokerFazeBook', 'product10', '0', 'http://pokerfazebook.com/index.php?product10', 'http://pokerfazebook.com/images/product10.png')";
*/

/*
//database table schema: 
$product = "CREATE TABLE IF NOT EXISTS p_market (id int(8) NOT NULL PRIMARY KEY, p_category VARCHAR(50), p_name VARCHAR(50), p_views int(11) NOT NULL, p_img LONGBLOB NOT NULL)";

//top five (market place) query:
$topFiveMarket = mysqli_query($conn, "SELECT p_img, COUNT(p_views) AS visits FROM p_market GROUP BY p_img ORDER BY visits DESC LIMIT 5");

if($topFive = mysqli_fetch_assoc($topFiveMarket)) {
		while($row = mysqli_fetch_assoc($topFive)) {
				echo $row['img'];
		}
}

//top five (subdomain) query:
$topFiveSub = mysqli_query($conn, "SELECT p_img, COUNT(p_views) AS visits FROM p_market WHERE p_category = ? GROUP BY p_img ORDER BY visits DESC LIMIT 5");

displayTopFive(); echo "<br>";
*/


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
   		<?php 
			$getProducts = mysqli_query($conn, "SELECT id, p_link, p_img FROM test_market");
	 		while($row = mysqli_fetch_array($getProducts)):; ?>
	 			<a href='test.php?id=<?php echo $row['id']; ?>' target="_blank"><img src="<?php echo $row['p_img']; ?>" height="200" width="300"></a>
			<?php endwhile;
		?>
		<?php 
		if(isset($_GET['id'])) {
		$id = $_GET['id'];
		mysqli_query($conn, "UPDATE test_market SET p_views = p_views+1 WHERE id = '$id'");
		}
 		?>
	</form>
   </body>
 </html>
