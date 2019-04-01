<?php 
	require_once('dbConnection.php');

	//escape string to prevent SQL injections
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$confirmpass = mysqli_real_escape_string($conn, $_POST['confirmpass']);

	//function to display failed registration message
	function invalidRegistration() {
		session_start();
		$_SESSION['failed'] = "Registeration Failed. Please try again!";
		echo $_SESSION['failed'];
	}

	$authUsername = mysqli_query($conn, "SELECT * FROM register WHERE user_username='$username'");
	$authEmail = mysqli_query($conn, "SELECT * FROM register WHERE user_email='$email'");

	//when submit button is pressed...
	if(isset($_POST['submit'])) {

		//check for valid user inputs
		if(($password != $confirmpass) || (!filter_var($email, FILTER_VALIDATE_EMAIL)) || mysqli_fetch_assoc($authUsername) || mysqli_fetch_assoc($authEmail)) { 
			invalidRegistration();
		} else {
			//hash password for security
			$password = md5($password);
			//insert user registration info into db table "register"
			$registerQuery = "INSERT INTO register (user_name, user_email, user_username, user_password) VALUES ('$name', '$email', '$username', '$password')";
			//execute query and redirect user to login page
			mysqli_query($conn, $registerQuery);
			header('Location: login.php');
			exit();
		}
	}
	mysqli_close($conn);
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h1>Register Account</h1>
	<form method = "post" action = "register.php"> 
    Name: <input type="text" placeholder="Enter name" name="name" required><br>
	Email: <input type="text" placeholder="Enter email" name="email" required><br>
	Username: <input type="username" placeholder="Enter username" name="username" required><br>
	Password: <input type="password" placeholder="Enter password" name="password" required><br>
	Repeat-Password: <input type="password" placeholder="Enter password" name="confirmpass" required><br>
	<input type="submit" name="submit"></button><br>
	Already A Member? <a href="login.php">Login</a>.
	</form>
</body>
</html>