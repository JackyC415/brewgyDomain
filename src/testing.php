<?php
require_once('dbConnection.php');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="get" action="">
   		<?php
			$getProducts = mysqli_query($conn, "SELECT p_name, p_link, p_img FROM test_market");
	 		while($row = mysqli_fetch_array($getProducts)):; ?>
	 			<a href='add_record.php?link=<?php echo $row['p_link']; ?>' target="_blank"><img src="<?php echo $row['p_img']; ?>" height="200" width="300"></a>
			<?php endwhile;
		?>
  </body>
</html>
