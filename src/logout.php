<?php
	session_start();
	ob_start();
	session_destroy();
	header("location:home.php");
	ob_end_flush();
?>