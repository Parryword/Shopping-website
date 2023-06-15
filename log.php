<?php
	session_start();
	ob_start();

	include("connect.php");
	$email = $_POST["email"];
	$password = $_POST["pswd"];
	$password = md5($password);

	$sql = "SELECT * FROM customers WHERE email='$email' AND password='$password'";
	$result = $conn->query($sql);
	if ($result->rowcount()) {
		$row = $result->fetch();
		$_SESSION['id'] = $row['CustomerID'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['cname'] = $row['ContactName'];
		$_SESSION['name'] = $row['CustomerName'];
		header("location:home.php");
		exit;
	} else {
		header("location:login.php?err=1");
		exit();
	}

?>
<!--alfreds@gmail.com 12345-->