<?php
	include("top.php");
?>
<style>
	#table_header{
		font-weight: bold;
		margin-top: 0.5em;
	}
</style>
<div>
	<ul class="nav flex-columns" style="background-color:#e4e4e4;">
		<div id="table_header">
			<div class="col-md-10">Description</div>
			<div class="col-md-1">Amount</div>
			<div class="col-md-1">Action</div>
		</div>
		<li class="nav-item active">
			<a class="nav-link col-md-10">
			<?php
				$id = $_GET['pid'];
				$sql = "SELECT * FROM products WHERE ProductID = $id";
	
				$result = $conn->query($sql);
				while ($row = $result->fetch()) {
					echo $row['ProductName']."—".$row['Unit']."—$".$row['Price'];
				}
			?>
			</a>
			<a class="nav-link col-md-1">
				N/A
			</a>
			<a class="nav-link col-md-1">
				Remove
			</a>
		</li>
	</ul>
</div>


<?php
	include("bottom.php");
?>