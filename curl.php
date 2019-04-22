<?php 

	require_once('dbConnection.php');

	echo "<h2>" . "Company A (Users from my own company)" . "</h2>";
	echo "<table border='1'>";
	$company_A_Users = mysqli_query($conn, "SELECT * FROM userTable");
	while ($users = mysqli_fetch_assoc($company_A_Users)) { 
    echo "<tr>";
    foreach ($users as $field => $val) { 
        echo "<td>" . $val . "</td>";  
    }
    echo "</tr>";
	}
	echo "</table>";

	echo "<h2>" . "Company B (Users from B company)" . "</h2>";
	$curl = curL_init();
	curl_setopt($curl, CURLOPT_URL, 'http://brewgy.com/user.php');
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$content = curl_exec($curl);
	curl_close($curl);
	print($content);

	echo "<h2>" . "Company C (Users from C company)" . "</h2>";
	$curl = curL_init();
	curl_setopt($curl, CURLOPT_URL, 'http://brewgy.com/user.php');
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$content = curl_exec($curl);
	curl_close($curl);
	print($content);
 ?>