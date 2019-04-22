<!DOCTYPE html>
<!--Copyright 2013-2019 Colorlib - All Rights Reserved.-->
<html lang="en">
<head>
	<title>Contacts</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="images/main.css">
	<link rel="stylesheet" href="css/indexCSS.css">
</head>

<body>
	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/Email.png" alt="IMG">	
			</div>

			<form class="contact1-form validate-form">
				 <p class="tag location">Contact Us</p>

				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="name" placeholder="Name">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input1" type="text" name="email" placeholder="Email">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="text" name="subject" placeholder="Subject">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<textarea class="input1" name="message" placeholder="Message"></textarea>
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn">
						<span>
							Send
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>

<?php 
/*PHP referenes; credit goes to: 
	http://php.net/manual/en/function.mysqli-connect.php
	http://php.net/manual/en/mysqli.query.php*/
	
	//establish mySQL connection
	require_once('dbConnection.php');

	$files = fopen("contacts.txt", "r");

	//check for end of line in text file
	while(!feof($files)) {
		//get the file, explode it to form a string array
		$content = fgets($files);
		$explodeLine = explode(",", $content);
		list($firstName, $lastName, $age, $gender, $city, $phoneNumber) = $explodeLine;
		
		//execute query to insert text file data into database
		$contactsQuery = "INSERT INTO contacts_info (user_firstname, user_lastname, user_age, user_gender, user_city, user_phonenumber) VALUES ('$firstName', '$lastName', '$age', '$gender', '$city', '$phoneNumber')";
	    mysqli_query($conn, $contactsQuery);
	}

	//close file & end connection
	fclose($files);
	mysqli_close($conn);
?>