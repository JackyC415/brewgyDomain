<?php 
	require_once('dbConnection.php');

	//create user table that contains user first/last name, email, home address, & home/cell phone number
	try {
	$userTable = "CREATE TABLE user (uid int(10) AUTO_INCREMENT PRIMARY KEY, user_firstname VARCHAR(100) NOT NULL, user_lastname VARCHAR(100) NOT NULL, user_email VARCHAR(100) NOT NULL UNIQUE, user_homeaddress VARCHAR(100) NOT NULL, user_homephone VARCHAR(100) NOT NULL, user_cellphone VARCHAR(100) NOT NULL UNIQUE)";
		mysqli_query($conn, $userTable);
	} catch(Exception $e) {
		$e->getMessage();
	}

	//create twenty user records for the company
	try {
	$insertUsers = "INSERT INTO user (user_firstname, user_lastname, user_email, user_homeaddress, user_homephone, user_cellphone) VALUES
            ('John', 'Rambo', 'johnrambo@mail.com', '595 Louise Avenue', '641-533-5673', '395-333-5612'),
            ('Clark', 'Kent', 'clarkkent@mail.com', '4574 June Avenue', '347-233-5674', '765-323-5632'),
            ('John', 'Carter', 'johncarter@mail.com', '123 Karley Avenue', '541-133-5674', '663-323-5622'),
            ('Samsung', 'Louise', 'harrypotter@mail.com', '5291 Bunchy Avenue', '515-555-0185', '564-323-5622'),
            ('Elon', 'Plam', 'elonplam@mail.com', '321 Grove Street', '515-555-0104', '202-555-0173'),
            ('Douglas', 'Guffy', 'scottlee@live.com', '467 Hamson Road', '515-555-0188', '202-555-0128'),
            ('Franky', 'Peterson', 'plover@live.com', '111 Cruise Avenue', '515-555-0116', '202-555-0178'),
            ('Susan', 'Le', 'drjlaw@gmail.com', '764 Simson Road', '515-555-0113', '202-555-0122'),
            ('Jeff', 'Dang', 'scato@yahoo.com', '8676 Maple Court', '860-555-0147', '518-555-0131'),
            ('Jimmy', 'Vi', 'mcnihil@yahoo.com', '5291 Bunchy Avenue', '860-555-0189', '410-555-0114'),
            ('Jefferson', 'Manu', 'ribet@yahoo.ca', '5291 Bunchy Avenue', '860-555-0146', '410-555-0157'),
            ('Richard', 'Yee', 'darin@verizon.net', '8 East Fairway St', '860-555-0168', '410-555-0119'),
            ('Lawrence', 'Ma', 'xnormal@aol.com', '942 Cardinal Street', '317-555-0112', '512-555-0153'),
            ('Ben', 'Swung', 'calin@sbcglobal.net', '37 Mechanic Street', '317-555-0196', '208-555-0179'),
            ('Jookie', 'Joke', 'bradl@yahoo.com', '8185 3rd Ave', '317-555-0106', '208-555-0136'),
            ('Gabriel', 'Martinez', 'smcnabb@msn.com', '425 Wild Rose Dr', '317-555-0128', '775-555-0104'),
            ('Gibby', 'Guan', 'ournews@msn.com', '7261 Shore St', '317-555-0160', '775-555-0107'),
            ('Larry', 'Plow', 'bhima@me.com', '441 Brickyard Street', '402-555-0158', '843-555-0150'),
            ('Tony', 'Gimbson', 'kjetilk@att.net', '40 San Carlos Rd', '402-555-0130', '843-555-0166'),
            ('Tony', 'Can', 'khris@hotmail.com', '9235 San Pablo Road', '919-555-0109', '614-555-0126')";
		mysqli_query($conn, $insertUsers);
	} catch(Exception $e) {
		$e->getMessage();
	}

	//escape string to prevent SQL injections
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$homephone = mysqli_real_escape_string($conn, $_POST['homephone']);
	$cellphone = mysqli_real_escape_string($conn, $_POST['cellphone']);

	function errorDisplay() {
		session_start();
		$_SESSION['error'] = "User already exists!";
		echo $_SESSION['error'];
	}

	//When user presses the add button, validate inputs
	if(isset($_POST['add'])) {
		$authEmail = mysqli_query($conn, "SELECT uid FROM user WHERE user_email='$email'");
		$authCell = mysqli_query($conn, "SELECT uid FROM user WHERE user_cellphone='$cellphone'");

		//if email has incorrect format, or cellphone/email already in database, display error
		if((!filter_var($email, FILTER_VALIDATE_EMAIL)) || mysqli_fetch_assoc($authEmail) || mysqli_fetch_assoc($authCell)) {
			errorDisplay();
		//otherwise, persist information into database
		} else {
			$insertUser = "INSERT INTO user (user_firstname, user_lastname, user_email, user_homeaddress, user_homephone, user_cellphone) VALUES ('$first', '$last', '$email', '$address', '$homephone', '$cellphone')";
			mysqli_query($conn, $insertUser);
		}
	}
	mysqli_close($conn);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>User</title>
 </head>
 <body>
 		<h1>Add user</h1>
 		<form method = "post" action = "user.php"> 
 		First Name: <input type="text" placeholder="Your first name" name="first" pattern="[A-Za-z]{1,32}" required><br>
		Last Name: <input type="text" placeholder="Your last name" name="last" pattern="[A-Za-z]{1,32}" required><br>
		Email: <input type="email" placeholder="example@gmail.com" name="email" required><br>
		Home Address: <input type="text" placeholder="Your address" name="address" pattern="[A-Za-z0-9'\.\-\s\,]" required><br>
		Home Phone: <input type="tel" placeholder="xxx-xxx-xxxx" name="homephone" id="homephone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="12" required><br>
		Cell Phone: <input type="tel" placeholder="xxx-xxx-xxxx" name="cellphone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="12" oninput="check(this)" required><br>
		<input type="submit" name="add" value="Add"></button><br>
		</form>
		<p><a href="searchUser.php">SearchUsers</a></p>
		<p><a href="myUsers.php">JackyUserList</a></p>
		<p><a href="curl.php">CombinedListUsers</a></p>
		<script language="javascript" type="text/javascript">
		function check(input) {
        if (input.value == document.getElementById('homephone').value) {
            input.setCustomValidity('Your cellphone is the same as homephone?');
        } else {
            input.setCustomValidity('');
        }
    }
	</script>
 </body>
 </html>