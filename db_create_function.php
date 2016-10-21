<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	// Create connection
	$conn_db = mysqli_connect($servername,$username,$password);

	if(!$conn_db){
		die("<h1>Connection Faild!</h1>".mysqli_connect_error());
	}else{
		// echo "<h1>Connection Successful!</h1>";
	}

	// Create db_name
	$sql_db = "CREATE DATABASE bsc_result";
	if (mysqli_query($conn_db,$sql_db)) {
	 	// echo "Database created successfully.";
	 }else{
	 	// echo "Error creating database: ".mysqli_error($conn_db);
	 }

	 $db_name = "bsc_result";
	 $conn = mysqli_connect($servername,$username,$password,$db_name);
	 // Create Table
	 $sql_table = "CREATE TABLE fourth_year(
						id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
						roll int (8),
						year_name varchar (255),
						group_name varchar (255),
						math_401 int ,
						math_402 int ,
						math_403 int ,
						math_404 int ,
						math_405 int ,
						math_406 int ,
						math_407 int ,
						math_408 int ,
						math_409 int ,
						math_411 int ,
						math_412 int ,
						math_413 int ,
						math_414 int ,
						math_415 int ,
						math_416 int ,
						math_417 int ,
						math_418 int ,
						cgpa real 
				 	);CREATE TABLE third_year(
						id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
						roll int (8),
						year_name varchar (255),
						group_name varchar (255),
						math_301 int ,
						math_302 int ,
						math_303 int ,
						math_304 int ,
						math_305 int ,
						math_306 int ,
						math_307 int ,
						math_308 int ,
						math_309 int ,
						math_310 int ,
						math_311 int ,
						math_312 int ,
						cgpa real 
				 	);CREATE TABLE second_year(
						id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
						roll int (8),
						year_name varchar (255),
						group_name varchar (255),
						math_201 int ,
						math_202 int ,
						math_203 int ,
						math_204 int ,
						math_205 int ,
						math_206 int ,
						math_207 int ,
						math_208 int ,
						math_209 int ,
						math_210 int ,
						math_211 int ,
						cgpa real 
				 	);CREATE TABLE first_year(
						id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
						roll int (8),
						year_name varchar (255),
						group_name varchar (255),
						math_101 int ,
						math_102 int ,
						math_103 int ,
						math_104 int ,
						math_105 int ,
						math_106 int ,
						math_107 int ,
						math_108 int ,
						math_109 int ,
						math_110 int ,
						math_111 int ,
						math_112 int ,
						cgpa real 
				 	);CREATE TABLE year_group(
				 		id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
						year_name varchar (255),
						group_name varchar (255)
					)";
	if (mysqli_multi_query($conn,$sql_table)) {
	 	// echo "Table fourth_year created successfully.";
	 }else{
	 	  // echo "Error creating table: ".mysqli_error($conn);
	 }
 ?>