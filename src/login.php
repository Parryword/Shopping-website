<?php
	include("top.php")


?>

<?php
	if(isset($_SESSION['id'])) {
		header("location:home.php");
		exit;				
	}
?>

<h3> Login Page </h3>
<form class="form-horizontal" action="log.php" method="post">
	<?php
		if(isset($_GET['err'])) {
			?>
			<div class="form-group">
				<label class="col-ms-offset-2 col-md-12" style="color:red">E-mail or password is incorrect.</label>
			</div>
			<?php
		}
	?>
	<div class="form-group">
		<label class="control-label col-md-2">E-mail</label>
		<div class="col-md-10">
			<input type="email" class="form-control" name="email" placeholder="Please enter e-mail">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-md-2">Password</label>
		<div class="col-md-10">
			<input type="password" class="form-control" name="pswd" placeholder="Please enter password">
		</div>
	</div>
	<div class="form-group">
		<div class="col-ms-offset-2 col-md-12">
			<input type="submit" class="btn btn-primary" value="Submit">
		</div>
	</div>
</form>

<?php
	include("bottom.php")
?>