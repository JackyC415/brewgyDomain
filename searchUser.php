<!DOCTYPE html>
 <html>
 <head>
 	<title>Search User</title>
 </head>
 <body>
 	<h1>Please search by name, email or (cell/home) phone numbers!</h1>
 	<form method = "POST" action = "searchUser.php">
 	<input type="text" name="input" placeholder="search user" required>
	<input type="submit" name="submit-search" value="Search">
	</form>
 </body>
 </html>
 <?php 
	require_once('dbConnection.php');

	$input = mysqli_real_escape_string($conn, $_POST['input']);
	$input = preg_replace("#[^0-9a-z]#i", "", $input);
	$findUser = "SELECT user_firstname, user_lastname FROM user WHERE CONCAT(user_firstname,' ',user_lastname) LIKE '%$input%' OR user_email LIKE '%$input%' OR user_cellphone LIKE '%$input%' OR user_homephone LIKE '%$input%'";

	if(isset($_POST['submit-search'])) {
		$authUser = mysqli_query($conn, $findUser);

		if (mysqli_num_rows($authUser) > 0) {
			while ($rows = mysqli_fetch_assoc($authUser)){
                echo "<br>"."User found: ".$rows['user_firstname']." ".$rows['user_lastname']."</br>";
            }
		} else {
			echo 'User does not exist!';
		}
	}
	mysqli_close($conn);
 ?>