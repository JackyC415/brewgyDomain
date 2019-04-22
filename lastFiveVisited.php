<!DOCTYPE html>
<html>
<head>
	<title>Visited Products</title>
</head>
<body>
	<h1>Visited Products (Exactly last five items only!)</h1>
  <h3><a href="lastFiveContinous.php">Click Me If You Want To See Last Five Products Continously Update</a></h3>
</body>
</html>
<?php 
    if(isset($_COOKIE['productVisited'])) {
          $counter = 1;
          $lastFiveArray = explode(" ", $_COOKIE['productVisited']);
          for($i = 0; $i < 5; $i++) {
          	echo $counter++.") product visited: ".$lastFiveArray[$i]."<br>";
          }
    } else {
    	echo "You haven't visited any products yet.";
    }                                      
?>