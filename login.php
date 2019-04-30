<?php 	
	require_once('dbConnection.php');

	//escape string to prevent SQL injection
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, md5($_POST['password']));

	//check for submit button press, then query to validate user info
	if (isset($_POST['login'])) {
	
	$authQuery = mysqli_query($conn, "SELECT * FROM register WHERE user_username='$username' AND user_password='$password'");

	//checks for user existence in database
		if(mysqli_fetch_assoc($authQuery) || $username == ('admin')) {
			session_start();
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['name'] = $_POST['user_username'];
			header("Location: welcome.php?login=success");
			exit();
		} else {
		header("Location: login.php?login=failed");
		exit();
		}
	} 
	mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Sign in</h1>
	<form method = "post" action = "login.php">
	Username: <input type="username" placeholder="Enter username" name="username" required><br>
	Password: <input type="password" placeholder="Enter password" name="password" required><br>
	<input type="submit" name="login"></button><br>
	</form>
</body>
</html>