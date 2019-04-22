<?php 
/*
Web Application Overview:

Note: LAMP stack is used to implement this feature provided by the product management team.

1) HTML5 responsible for prompting user input; in our case, an National Provider Identifier. Restricts 10 digits (max) length input, regular expression to ensure 10 numbers were entered. A save button to process the request.

2) PHP7 is used for server side authentication. When user presses the save button, mySQL runs a query to validate the user input. If an NPI already exists in the database, an error message will be printed, otherwise proceed to persist the information into database. Input has escape string to prevent SQL injection and NPI is hashed with MD5 for security purposes.

3) MySQL5 database to act as the webservice for national registry. A connection is established, localhost by default. Created a table named profile that has two fields: primary id and user npi. Other fields are ignored for the purpose of this assignment; such as, doctor names, age, location, etc... 
*/

//assumes webservice hosted by national registry is mySQL database
$conn = mysqli_connect("localhost", "username", "password");
//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

//create a new profile table that contains only NPI data field; ignoring other fields
try {
$profileTable = "CREATE TABLE profile (uid int(10) AUTO_INCREMENT PRIMARY KEY, user_npi int(4) NOT NULL UNIQUE)";
mysqli_query($conn, $profileTable);
} catch(Exception $e) {
	$e->getMessage();
}

//escape npi input content to prevent SQL injection
$npiInput = mysqli_real_escape_string($conn, $_POST['npi']);

//when user presses save button, validate the information
if(isset($_POST['save'])) {
	
	$authNPI = mysqli_query($conn, "SELECT * FROM profile WHERE user_npi ='$npiInput'");
	//if npi already exists in database, display error
	if(mysqli_fetch_assoc($authNPI)) {
		echo "Invalid NPI!";
	//otherwise persist npi into database; hashed npi digits for security
	} else { 
		$npiInput = md5($npiInput);
		$insertNPI = "INSERT INTO profile (user_npi) VALUES ('$npiInput')";
		mysqli_query($conn, $insertNPI);
	}
}
//terminate database connection
mysqli_close($conn);
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>AllScript Simple Web App</title>
 </head>
 <body>
 	<h1>NPI Validation</h1>
 	<form method = "post" action = "npiValidation.php">
 	NPI: <input type="text" name="npi" pattern="[0-9]{10}" placeholder="10 digits" maxlength="10" required>
	<input type="submit" name="save" value="Save">
	</form>
 </body>
 </html>