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
		$_SESSION['failed'] = "User Already Exists!";
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
	<h1>Create account</h1>
	<form method = "post" action = "register.php"> 
    Your Name: <input type="text" placeholder="Your name" name="name" pattern="[A-Za-z]{1,32}" required><br>
	Email: <input type="email" placeholder="example@gmail.com" name="email" required><br>
	Username: <input type="username" placeholder="Your username" maxlength="15" name="username" required><br>
	Password: <input type="password" placeholder="At least 6 characters" minlength="6" maxlength="16" name="password" id="password" required><br>
	Re-enter password: <input type="password" placeholder="Repeat password" maxlength="16" name="confirmpass" oninput="check(this)" required><br>
	<input type="submit" name="submit"></button><br>
	<p>Already have an account? <a href="login.php">Sign in</a></p>
	</form>
	<script language="javascript" type="text/javascript">
		function check(input) {
        if (input.value != document.getElementById('password').value) {
            input.setCustomValidity('Password Must be Matching.');
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }
	</script>
</body>
</html>