<?php 
	require_once('dbConnection.php');
	/*$userTable = "CREATE TABLE user (uid int(10) AUTO_INCREMENT, user_firstname VARCHAR(100), user_lastname VARCHAR(100), user_email VARCHAR(100), user_homeaddress VARCHAR(100), user_homephone VARCHAR(100), user_cellphone VARCHAR(100), PRIMARY KEY (uid), UNIQUE KEY (user_homephone), UNIQUE KEY (user_cellphone), UNIQUE KEY (user_email))";*/
	
	//escape string to prevent SQL injections
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$homephone = mysqli_real_escape_string($conn, $_POST['homephone']);
	$cellphone = mysqli_real_escape_string($conn, $_POST['cellphone']);

	$authEmail = mysqli_query($conn, "SELECT * FROM user WHERE user_email='$email'");
	$authCell = mysqli_query($conn, "SELECT * FROM user WHERE user_cellphone='$cellphone'");

	//function to display failed registration message
	function invalidInsert() {
		session_start();
		$_SESSION['failed'] = "User already exists!";
		echo $_SESSION['failed'];
	}

	function validInsert() {
		session_start();
		$_SESSION['success'] = "Added user to database!";
		echo $_SESSION['success'];
	}

	//when submit button is pressed...
	if(isset($_POST['add'])) {
		
		if((!filter_var($email, FILTER_VALIDATE_EMAIL)) || mysqli_fetch_assoc($authEmail) || mysqli_fetch_assoc($authCell)) {
			invalidInsert();
		} else {
			$insertUser = "INSERT INTO user (user_firstname, user_lastname, user_email, user_homeaddress, user_homephone, user_cellphone) VALUES ('$first', '$last', '$email', '$address', '$homephone', '$cellphone')";
			mysqli_query($conn, $insertUser);
			validInsert();
		}
	}
	//mysqli_query($conn, $userTable);
	echo "User Table Created in mySQL database!" . PHP_EOL;
	mysqli_close($conn);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>User</title>
 </head>
 <body>
 		<li><a href="searchUser.php" target="_blank">Search Users</a></li>
 		<h1>Add Users</h1>
 		<form method = "post" action = "user.php"> 
 		First Name: <input type="text" placeholder="first name" name="first" required><br>
		Last Name: <input type="text" placeholder="last name" name="last" required><br>
		Email: <input type="text" placeholder="email" name="email" required><br>
		Home Address: <input type="text" placeholder="home address" name="address" required><br>
		Home Phone: <input type="text" placeholder="home phone" name="homephone" required><br>
		Cell Phone: <input type="text" placeholder="cell phone" name="cellphone" required><br>
		<input type="submit" name="add"></button><br>
		</form>
 </body>
 </html>