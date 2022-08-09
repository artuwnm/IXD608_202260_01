<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>
</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
			<h2>Product List</h2>

			<div class="form-control">
				<form class="hotdog light" id="product-search">
					<input type="search" placeholder="Search Products">
				</form>
			</div>

			<div class="form-control">
				<div class="card soft">
					<div class="display-flex flex-wrap">
						<div class="flex-stretch display-flex">
							<div class="flex-none">
								<button data-filter="category" data-value="" type="button" class="form-button">All</button>
							</div>
							<div class="flex-none">
								<button data-filter="category" data-value="beer" type="button" class="form-button">Beer</button>
							</div>
							<div class="flex-none">
								<button data-filter="category" data-value="gin" type="button" class="form-button">Gin</button>
							</div>
							<div class="flex-none">
								<button data-filter="category" data-value="tequila" type="button" class="form-button">Tequila</button>
							</div>
							<div class="flex-none">
								<button data-filter="category" data-value="vodka" type="button" class="form-button">Vodka</button>
							</div>
							<div class="flex-none">
								<button data-filter="category" data-value="whisky" type="button" class="form-button">Whisky</button>
							</div>
							<div class="flex-none">
								<button data-filter="category" data-value="wine" type="button" class="form-button">Wine</button>
							</div><div class="flex-none">
								<button data-filter="category" data-value="vodka" type="button" class="form-button">Vodka</button>
							</div>
						</div>
						<div class="flex-none">
							<div class="form-select">
								<select class="js-sort">
									<option value="1">Newest</option>
									<option value="2">Oldest</option>
									<option value="3">Least Expensive</option>
									<option value="4">Most Expensive</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ul>li*4>a[href="product_item.php"]>{Product $} -->

			<div class='productlist grid gap'></div>
			
	</div>

</body>
</html>