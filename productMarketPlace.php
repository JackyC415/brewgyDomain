<!DOCTYPE html>
 <html>
 <head>
 	<title>MarketPlace</title>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	 <link rel="stylesheet" href="css/product.css">
 </head>
 <body>
 	<h1>Product Market Place</h1>
              <section class="tiles">
                <article class="style1">
                <span class="image">
          			<img src="images/pic01.jpg" alt="" />
          		</span>
                  <a href="http://pokerfazebook.com/Services.php">
                    <h2>PokerFaZeBook</h2>
                    <div class="content">
                      <p>PokerFaZeBook Services</p>
                    </div>
                  </a>
                </article>
                <article class="style2">
                  <span class="image">
                    <img src="images/pic02.jpg" alt="" />
                  </span>
                  <a href="http://maninderjitownwebsite.com/products.php">
                    <h2>Animatory</h2>
                    <div class="content">
                      <p>Animation Services</p>
                    </div>
                  </a>
                </article>
                <article class="style3">
                  <span class="image">
                    <img src="images/pic03.jpg" alt="" />
                  </span>
                  <a href="http://www.shiyancai4213.com/product.php">
                    <h2>Stepic</h2>
                    <div class="content">
                      <p>Online Game Shop</p>
                    </div>
                  </a>
                </article>
                  <article class="style4">
                  <span class="image">
                    <img src="images/pic04.jpg" alt="" />
                  </span>
                  <a href="http://brewgy.com/product.php">
                    <h2>Brewgy</h2>
                    <div class="content">
                      <p>Better than DJI</p>
                    </div>
                  </a>
                </article>
                <article class="style5">
                  <span class="image">
                    <img src="images/pic05.jpg" alt="" />
                  </span>
                  <a href="http://www.roopeshrai.com/products.php">
                    <h2>CloudBook</h2>
                    <div class="content">
                      <p>Directory Services</p>
                    </div>
                  </a>
                </article>
                <article class="style6">
                  <span class="image">
                    <img src="images/pic06.jpg" alt="" />
                  </span>
                  <a href="http://165.227.54.167/services.php">
                    <h2>Leap</h2>
                    <div class="content">
                      <p>Luxury Services</p>
                    </div>
                  </a>
                </article>
                 <article class="style6">
                  <span class="image">
                    <img src="images/pic06.jpg" alt="" />
                  </span>
                  <a href="http://brewgy.com/cookieTest.php">
                    <h2>Test</h2>
                    <div class="content">
                      <p>Test</p>
                    </div>
                  </a>
                </article>
                <article>
                	<h1>Top Five Most Visited</h1>
                	<?php 
       					$cookie = unserialize($_COOKIE['mostVisitedProducts']);
   						  if (is_array($cookie)) {
   							  arsort($cookie);
   							  $topFive = array_slice($cookie,0,5);
   							    foreach($topFive as $key => $val) {
   							      echo '<img src="'.$key.'"/>'.$val;
   							}
   						} 
					?>
                </article>
		</body>
		</html>