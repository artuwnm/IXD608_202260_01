<?php
include_once "lib/php/functions.php";
include_once "parts/templates.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Drunken Dudes</title>

	<?php include "parts/meta.php"; ?>
	
</head>
<body class="flush">
	
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<h2>Beautiful Pink Vodka</h2>
	</div>
	<div class="view-window" style="background-image:url('img/main1.png')">
	</div>

	<div class="container">
		<br>
		<h3>
		Dudes' pick
		</h3>
		<!-- <div class="grid gap">
			<div class="col-xs-12 col-md-4">
				<figure class="figure product">
					<img src="img/3.png" alt="">
					<figcaption>
						<div>Johnnie Walker - Blue Label</div>
						<div>$3.99</div>
					</figcaption>
				</figure>
			</div>
		
			<div class="col-xs-12 col-md-4">
				<figure class="figure product">
					<img src="img/4.png" alt="">
					<figcaption>
						<div>Bacadi - Gold</div>
						<div>$3.99</div>
					</figcaption>
				</figure>
			</div>
		
			<div class="col-xs-12 col-md-4">
				<figure class="figure product">
					<img src="img/5.png" alt="">
					<figcaption>
						<div>Tequila</div>
						<div>$3.99</div>
					</figcaption>
				</figure>
			</div>
		</div> -->
		<div class="container">
			<h2>Latest Beer</h2>
			<?php recommendedCategory("beer"); ?>
			<h2>Latest Gin</h2>
			<?php recommendedCategory("gin"); ?>
		</div>
		<br><br>
		
	</div>

	<footer>
		Copyright © 2022 Academy of Art University Jinyeong Kim
	</footer>
</body>
</html>