<?php
	$host = "localhost";
	$username = 'root';
	$password = '';
	$dbname = 'sheree_ecom_db';


	$conn = mysqli_connect($host, $username, $password, $dbname);

	if(!$conn){
		die('connection failed' . mysqli_error($conn));
	}
	// echo "connected";



?>