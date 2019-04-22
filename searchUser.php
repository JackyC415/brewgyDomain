<?php 
	require_once('dbConnection.php');

	$input = mysqli_real_escape_string($conn, $_POST['search']);
	$authUserInput = mysqli_query($conn, "SELECT * FROM user WHERE
		CONCAT(user_firstname,' ', user_lastname) like '%$input%' 
		|| user_email like '%$input%' 
		|| user_cellphone like '%$input%' 
		|| user_homephone like '%$input%'");

	if(isset($_POST['submit'])) {
		if(mysqli_num_rows($authUserInput) > 0) {
			 while($results = mysqli_fetch_assoc($authUserInput)){
                echo "<h2>"."User Found!"."</h2>"."<p>"."First Name: ".$results['user_firstname']."</p>"."Email: ".$results['user_email'];
            }
		} else {
			echo 'User does not exist!';
		}
	}
	mysqli_close($conn);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Search User</title>
 </head>
 <body>
 	<h1>Search User by Name, Email or Phone (Cell/Home) Numbers!</h1>
 	<form method = "post" action = "searchUser.php">
 	<input type="text" name="search" required>
	<input type="submit" name="submit" value="Search">
	</form>
 </body>
 </html>