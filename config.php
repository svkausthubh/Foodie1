<?php

	$hostname="localhost"; //local server name default localhost
	$username="root";  //mysql username default is root.
	$password="";       //blank if no password is set for mysql.
	$database="foodie";  //database name which you created
	$db=mysqli_connect($hostname,$username,$password,$database);
	if(! $db)
	{
	die('Connection Failed'.mysqli_error());
	}

	// $query = "SELECT * FROM restaurant";
	// $result = $db->query($query);
	// // $row = $result->fetch_array();
	// while ($result->fetchInto($row)) {
	// 	# code...
	// 	echo $row[0];
	// }
	// echo $row[3];
	

?>