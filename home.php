	<?php
		include("top.php");
	?>
	<!--CONTENT-->
		<h3>Start shopping</h3>
		<?php
			if (isset($_GET['catId'])) {
				$catId = $_GET['catId']; 
			} else {
				$catId = 1; 
			}
			$sql = "SELECT *  FROM categories";
			$result = $conn->query($sql);

			$sql = "SELECT * FROM products WHERE CategoryID = $catId";
			$result_pro = $conn->query($sql);
		?>
		<div class="col-md-3" style="background-color: #e4e4e4;">
			<ul class="nav flex-columns">
				<?php
					while($row = $result->fetch()) {
						$active = "";
						if ($catId == $row['CategoryID']) {
							$active = "active";
						}
						echo "<li class=\"nav-item $active\"><a class=\"nav-link\" href=\"home.php?catId=".$row['CategoryID']."\" title=\"".$row['Description']."\">".$row['CategoryName']."</a></li>";
					} 
				?>
			</ul>
		</div>
		<div class="col-md-9">
			<?php
				while($row = $result_pro->fetch()) {
						echo "
							<div class=\"col-md-5\" id='pro_div'>
							<h3> <strong> ".$row['ProductName']."</strong> <h3>
							<div style='font-size:0.7em; margin-top:-1em'>
							<p>$".$row['Price']."</p>
							<p>".$row['Unit']."</p>
							<p><a href='basket.php?pid=".$row['ProductID']."'>Add to cart</a></p>
							</div>
							</div>
						";
					} 
			?>
		</div>
	</div>
	<!--CONTENT END-->
	<?php
		include("bottom.php");
	?>
</body>
</html>