<?php
	include("config.php");
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// echo "Database connection is successful.<br>";
	}
	catch (PDOException $e) {
		echo "Database connection has failed: ".$e->getMessage();
		exit();	
	}
?>