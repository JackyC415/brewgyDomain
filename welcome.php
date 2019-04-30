<?php 

session_start();

if(!isset($_SESSION['loggedin'])) {
	header("Location: login.php?login=error");
	exit();

setcookie("FirstCookie", 'first cookie', time()+60);
echo 'Hello'.$_COOKIE["FirstCookie"];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
</head>
<body>
	<form method = "post" action = "includes/login.php"></form>
	<h1>Current Users</h1>
	<ul>
		<li>Mary Smith</li>
		<li>John Wang</li>
		<li>Alex Bington</li>
		<li>John Smith</li>
		<li>Peter Li</li>
		<li>Jason Well</li>
	</ul>
	<a href="logout.php">
		<button>Logout</button>
	</a>
</body>
</html>