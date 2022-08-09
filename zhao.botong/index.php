<?php
include_once "lib/php/functions.php";
include_once "parts/templates.php";
?><!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Botong's Website</title>

	 <?php
        include "parts/meta.php"
    ?>
</head>

<body class="flush">
	<?php
		include "parts/navbar.php"
	?>
	<div class="title">
		<h1>Welcome!</h1>
	</div>

	<div class="view-window flex-none container" style="background-image:url('img/wine.jpg')"></div>

	<div><a href="product_list.php"><button class="join-btn">Join</button></a></div>

	<div class="container">
		<article id="article1" class="article card soft">
			<div class="display-flex flex-align-center">
				<div class="flex-stretch">
					<h2></h2>
				</div>
			</div>
			<div class="article-body">
				<p>Botong's small store sells a variety of drinks and beverages, and as you can see, it's all here, so
					enjoy browsing!
					<br><br>Let's have a drink and cool off the hot summer day!
				</p>
		</article>
		<div class="view-window flex-none container" style="background-image:url('img/wine2.jpg')"></div>

		<div class="container">
			<article id="article1" class="article card soft">
				<div class="display-flex flex-align-center">
					<div class="flex-stretch">
						<h2></h2>
					</div>
				</div>
				<div class="article-body">
					<p>Promotion activities to know first, please follow our website to become a member and be able to
						enjoy the member discount, <br><br>what are you waiting for?
			</article>
		</div>

	</div>
	<div class="container">
		<h2>Latest Liquor</h2>
		<?php recommendedCategory("liquor"); ?>
		<h2>Latest Beverage</h2>
		<?php recommendedCategory("beverage"); ?>
	</div>
	<div class="container">
		<footer class="flex-stretch card soft">
			@Botong
		</footer>
	</div>
</body>

</html>