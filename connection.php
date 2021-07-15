<?php
	
	$servername= "localhost";
	$username = "root";
	$password = "";
	$dbname="basic_banking_system";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	
	if(!$conn){
		die("could not connect to database  due to following error".mysqli_connect_error());
	}

?>