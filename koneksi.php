<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "coba_bukutamu";

	$conn = new mysqli($servername, $username, $password, $dbname);


	if($conn->connect_error){
		die("connection gagal :". $conn->connect_error);
	}

?>
