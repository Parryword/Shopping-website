<?php
	session_start();
	ob_start();

	include("connect.php");
	$email = $_POST["email"];
	$password = $_POST["pswd"];
	$password = md5($password);

	$stmt = $conn->prepare("SELECT * FROM customers WHERE email=:email AND password=:password");
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':password', $password);
	$stmt->execute();
	$result = $stmt->fetch();
	if (gettype($result)==gettype(array())) {
		echo $result['CustomerName'];
		$_SESSION['id'] = $result['CustomerID'];
		$_SESSION['email'] = $result['email'];
		$_SESSION['cname'] = $result['ContactName'];
		$_SESSION['name'] = $result['CustomerName'];
		header("location:home.php");
		exit;
	} else {
		header("location:login.php?err=1");
		exit();
	}

?>
<!--alfreds@gmail.com 12345-->