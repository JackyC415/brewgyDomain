<?php
require_once('phpFiles/dbConnection.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TopFive</title>
  </head>
  <body>
    <h1>Top Five Most Visited MarketPlace</h1>
    <?php
    $topFiveMarket = mysqli_query($conn, "SELECT product_name, count(product_name) AS visits FROM UserVisit, Product GROUP BY product_name ORDER BY visits DESC LIMIT 5");
    while($row = mysqli_fetch_array($topFiveMarket)):; ?>
      <li><?php echo $row['product_name']." (".$row['visits']." visits)"; ?></li>
    <?php endwhile;
    ?>

    <h1>Top Five Most Visited PokerFazeBook</h1>
    <?php
    $topFivePoker = mysqli_query($conn, "SELECT product_name, count(product_name) AS visits FROM UserVisit,Product  WHERE product_name=Name and WebSite='pokerfazebook' GROUP BY product_name ORDER BY visits DESC LIMIT 5");
    while($row = mysqli_fetch_array($topFivePoker)):; ?>
      <li><?php echo $row['product_name']." (".$row['visits']." visits)"; ?></li>
    <?php endwhile;
    ?>

    <h1>Top Five Most Visited Animatory</h1>
    <?php
    $topFiveAnimatory = mysqli_query($conn, "SELECT product_name, count(product_name) AS visits FROM UserVisit,Product  WHERE product_name=Name and WebSite='Animatory' GROUP BY product_name ORDER BY visits DESC LIMIT 5");
    while($row = mysqli_fetch_array($topFiveAnimatory)):; ?>
      <li><?php echo $row['product_name']." (".$row['visits']." visits)"; ?></li>
    <?php endwhile;
    ?>

    <h1>Top Five Most Visited Stepic</h1>
    <?php
    $topFiveStepic = mysqli_query($conn, "SELECT product_name, count(product_name) AS visits FROM UserVisit,Product  WHERE product_name=Name and WebSite='Stepic' GROUP BY product_name ORDER BY visits DESC LIMIT 5");
    while($row = mysqli_fetch_array($topFiveStepic)):; ?>
      <li><?php echo $row['product_name']." (".$row['visits']." visits)"; ?></li>
    <?php endwhile;
    ?>

    <h1>Top Five Most Visited Brewgy</h1>
    <?php
    $topFiveBrewgy = mysqli_query($conn, "SELECT product_name, count(product_name) AS visits FROM UserVisit,Product  WHERE product_name=Name and WebSite='Brewgy' GROUP BY product_name ORDER BY visits DESC LIMIT 5");
    while($row = mysqli_fetch_array($topFiveBrewgy)):; ?>
      <li><?php echo $row['product_name']." (".$row['visits']." visits)"; ?></li>
    <?php endwhile;
    ?>

    <h1>Top Five Most Visited CloudBook</h1>
    <?php
    $topFiveCloudBook = mysqli_query($conn, "SELECT product_name, count(product_name) AS visits FROM UserVisit,Product  WHERE product_name=Name and WebSite='CloudBook' GROUP BY product_name ORDER BY visits DESC LIMIT 5");
    while($row = mysqli_fetch_array($topFiveCloudBook)):; ?>
      <li><?php echo $row['product_name']." (".$row['visits']." visits)"; ?></li>
    <?php endwhile;
    ?>

    <h1>Top Five Most Visited Leap</h1>
    <?php
    $topFiveLeap = mysqli_query($conn, "SELECT product_name, count(product_name) AS visits FROM UserVisit,Product  WHERE product_name=Name and WebSite='Leap' GROUP BY product_name ORDER BY visits DESC LIMIT 5");
    while($row = mysqli_fetch_array($topFiveLeap)):; ?>
      <li><?php echo $row['product_name']." (".$row['visits']." visits)"; ?></li>
    <?php endwhile;
    ?>

  </body>
</html>
