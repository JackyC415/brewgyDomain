<!DOCTYPE html>
<html>
<head>
  <title>Last Five Products Continously</title>
</head>
<body>
      <h1>This Keeps Track Of Your Most Recent Last Five Products Continously</h1>
</body>
</html>
<?php 
    if(isset($_COOKIE['productVisited'])) {
          $counter = 1;
          $lastFiveArray = array_reverse(explode(" ", $_COOKIE['productVisited']));
          for($i = 0; $i < 5; $i++) {
          	echo $counter++.") product visited: ".$lastFiveArray[$i]."<br>";
          }
    } else {
    	echo "You haven't visited any products yet.";
    }                                      
?>