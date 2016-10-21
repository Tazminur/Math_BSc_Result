<?php 
	require_once './db_create_function.php';
	$servername=  "localhost";
	$username=    "root";
	$password=    "";
	$db_name=     "bsc_result";

	$conn = mysqli_connect($servername, $username, $password,$db_name);

	if (!$conn) {
		echo("Connection failed: " . mysqli_connect_error());
	}
	else {
		$db_connect = mysqli_select_db($conn,$db_name);
		if (!$db_connect) {
			echo 'Database Not Found'.mysql_error();
		}
	}
 ?>