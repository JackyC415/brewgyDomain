<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="get" action="">
   		<?php
			$getProducts = mysqli_query($conn, "SELECT Weblink, ImageAddr FROM Product");
	 		while($row = mysqli_fetch_array($getProducts)):; ?>
	 			<a href='add_record.php?link=<?php echo $row['Weblink']; ?>' target="_blank"><img src="<?php echo $row['ImageAddr']; ?>" height="200" width="300"></a>
			<?php endwhile;
		?>
  </body>
</html>
