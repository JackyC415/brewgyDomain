<?php 
	require_once('dbConnection.php');

	echo "<h2>" . "Users from Jacky Z. Chen's Company" . "</h2>";
	echo "<table border='1'>";
	echo "<tr>"."<th>id</th>"."<th>first</th>"."<th>last</th>"."<th>email</th>"."<th>address</th>"."<th>home</th>"."<th>cell</th>"."</tr>";

	//query data from user table and render that information on UI in table format
	$companyA = mysqli_query($conn, "SELECT * FROM userTable");
	while ($users = mysqli_fetch_assoc($companyA)) { 
    echo "<tr>";
    foreach ($users as $field => $val) { 
        echo "<td>".$val."</td>";  
    }
    echo "</tr>";
	}
	echo "</table>";

 ?>