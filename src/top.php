<?php
	session_start();
	ob_start();
	include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My First Shopping Webpage</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="	sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
	<style>
		footer {
			background-color: #7c7f69;
			padding: 20px;

		}
		.navbar{
			margin-bottom:0px;
			border-radius:0px;
		}
		.carousel-inner{
			margin:auto;
			width:auto;
			height:255px;
			max-height:255px;
		}
		.item img {
		  width: 100%;
		}
		@media(max-width:800px){
			.carousel-caption{
				display: none;
			}
		}
		#pro_div{
			background-color: #e4e4e4;
			margin: 5px;
			min-height:200px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="http://ieu.edu.tr">IEU</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="home.php">Home Page</a></li>
					<li ><a href="about.php">About</a></li>
					<li ><a href="contact.php">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php
						if(isset($_SESSION['id'])) {
							echo "
							<li><a><span class='glyphicon'></span>&nbsp;&nbsp;".$_SESSION['name']."</a></li>;
							<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>&nbsp;&nbsp;Log out</a></li>";
						} else {
							echo "<li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span>&nbsp;&nbsp;Log in</a></li>";
						}
					?>			
				</ul>
			</div>
		</div>
	</nav>
	<!--SLIDER-->
	<div class="carousel slide" data-ride="carousel" id="myCar">
		<ol class="carousel-indicators">
			<li data-target="#myCar" class="active" data-slide-to=0></li>
			<li data-target="#myCar" data-slide-to=1></li>
		</ol>
		<div class="carousel-inner" role="listbox">
		<div class="item active">
			<img src="../img/food1.jpg" alt="first image"></img>
			<div class="carousel-caption">
				<h2>First Image</h2>
				<p>Some text here</p>
			</div>
		</div>
		<div class="item">
			<img src="../img/food2.jpg" alt="second image"></img>
			<div class="carousel-caption">
				<h2>Second Image</h2>
				<p>Some text here</p>
			</div>
		</div>

		<a class="left carousel-control" href="#myCar" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>

		<a class="right carousel-control" href="#myCar" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	</div>
<div class="container text-center">
	<!--SLIDER END-->