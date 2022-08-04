<?php

include "../lib/php/functions.php";

$empty_product = (object)[
	"name"=>"miniskirt",
	"description"=>"High-waisted skort. Combination band detail at side with front slit. Side hidden in-seam zip closure.",
	"price"=>"50",
	"amount"=>"3",
	"category"=>"skirt",
	"images"=>"mg/miniskirt_XS_1.jpeg",
	"size"=>"XS"
];



// `id` int(11) NOT NULL,
//   `name` varchar(64) NOT NULL,
//   `category` varchar(32) NOT NULL,
//   `size` varchar(4) NOT NULL,
//   `price` decimal(5,0) NOT NULL,
//   `images` varchar(256) NOT NULL,
//   `description` varchar(512) NOT NULL




// LOGIC
try {
	$conn = makePDOConn();
	if(!empty($_GET['action'])) {
	switch($_GET['action']) {
		case "update":
			$statement = $conn->prepare("UPDATE
				`products`
				SET
					`name`=?,
					`price`=?,
					`amount`=?,
					`category`=?,
			        `size`=?,
					`description`=?,
					`images`=?
				WHERE `id`=?
				");
			$statement->execute([
				$_POST['product-name'],
				$_POST['product-price'],
				$_POST['product-amount'],	
				$_POST['product-category'],
				$_POST['product-size'],
				$_POST['product-description'],
				$_POST['product-images'],
				$_GET['id']
			]);
			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;
		case "create":
			$statement = $conn->prepare("INSERT INTO
				`products`
				(
					`name`,
					`price`,
					`amount`,
					`category`,
					`size`,
					`description`,
					`images`
				)
				VALUES (?,?,?,?,?,?,?)
				");
			$statement->execute([
				$_POST['product-name'],
				$_POST['product-price'],
				$_POST['product-category'],
				$_POST['product-size'],
				$_POST['product-description'],
				$_POST['product-images']
			]);
			$id = $conn->lastInsertId();
			header("location:{$_SERVER['PHP_SELF']}?id=$id");
			break;
		case "delete":
			$statement = $conn->prepare("DELETE FROM `products` WHERE id=?");
			$statement->execute([$_GET['id']]);

			header("location:{$_SERVER['PHP_SELF']}");
			break;
	}
	}
} catch(PDOException $e) {
	die($e->getMessage());
}







//  TEMPLATES
function productListItem($r,$o) {
return $r.<<<HTML
<div class="card soft">
	<div class="display-flex">
		<div class="flex-none images-thumbs-cart"><img src='$o->images'></div>
		<div class="flex-stretch" style="padding: 1em;">$o->name</div>
		<div class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button">Edit</a></div>
	</div>
</div>
HTML;
}



function showProductPage($o) {

$id =$_GET['id'];
$addoredit = $id == "new" ? "Add" : "Edit";
$createorupdate = $id == "new" ? "create" : "update";
$images = array_reduce(explode(",",$o->images),function($r,$o){return $r."<img src='$o'>";});
	//heredoc
$display = <<<HTML
<div>
	<h2>$o->name</h2>
	<div class="form-control">
		<label class="form-label">Price</label>
		<span>&dollar;$o->price</span>
	</div>
    <div class="form-control">
        <label class="form-label">Amount</label>
      <span>$o->amount</span>
   </div>
	<div class="form-control">
		<label class="form-label">Size</label>
		<span>$o->size</span>
	</div>
	<div class="form-control">
		<label class="form-label">Category</label>
		<span>$o->category</span>
	</div>
	<div class="form-control">
		<label class="form-label">Description</label>
		<span>$o->description</span>
	</div>
	<div class="form-control">
		<label class="form-label">Other Images</label>
		<span class="images-thumbs">$images</span>
	</div>
</div>
HTML;

$form = <<<HTML
 	<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
 		<h2>$addoredit Product</h2>
		<div class="form-control">
			<label class="form-label" for="product-name">Name</label>
			<input class="form-input" name="product-name" id="product-name" type="text" value="$o->name" placeholder="Enter the Product Name">
		</div>
		<div class="form-control">
			<label class="form-label" for="product-price">Price</label>
			<input class="form-input" name="product-price" id="product-price" type="Number" min="0" max="1000" step="0.01" value="$o->price" placeholder="Enter the Product Price">
		</div>
		<div class="form-control">
        <label class="form-label" for="product-amount"> Amount</label>
        <input class="form-input" name="product-amount" id="product-amount" type="Number" min="0" max="1000" step="1" value="$o->amount" placeholder="Enter the Product Amount" >
		<div class="form-control">
			<label class="form-label" for="product-sizey">Size</label>
			<input class="form-input" name="product-size" id="product-size" type="text" value="$o->name" placeholder="Enter the Size">
		</div>
		<div class="form-control">
			<label class="form-label" for="product-category">Category</label>
			<input class="form-input" name="product-category" id="product-category" type="text" value="$o->category" placeholder="Enter the Product Category">
		</div>
		<div class="form-control">
			<label class="form-label" for="product-description">Description</label>
			<textarea class="form-input" name="product-description" id="product-description" placeholder="Enter the Product Description">$o->description</textarea>
		</div>

		<div class="form-control">
			<label class="form-label" for="product-images">Other Images</label>
			<input class="form-input" name="product-images" id="product-images" type="text" value="$o->images" placeholder="Upload the Product Images">
		</div>
		<div class="form-control">
			<input class="form-button" type="submit" value="Save Changes">
		</div>
</form>
HTML;

$output = $id == "new" ? "<div class='card soft'>$form</div>" :
	"<div class='grid gap'>
		<div class='col-xs-12 col-md-7'><div class='card soft'>$display</div></div>
		<div class='col-xs-12 col-md-5'><div class='card soft'>$form</div></div>
	</div>
	";

$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";


echo <<<HTML
<div class="card soft">
	<nav class="display-flex">
		<div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
		<div class="flex-none">$delete</div>
	</nav>
</div>
$output
HTML;
}






?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Admin Page</title>
	<?php
		include "../parts/meta.php";
	?>
</head>
<body>
	
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Product Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
				</ul>
			</nav>
		</div>
	</header>

		<div class="container">

			<?php 

			if(isset($_GET['id'])) {
				showProductPage(
					$_GET['id']=="new" ?
						$empty_product :
						makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]
				);
			} else {

				?>
				<h2>Product List</h2>
				
				<?php

				$result = makeQuery(makeConn(),"SELECT * FROM `products`");

				echo array_reduce($result,'productListItem');
				
				?>

			

		<?php } ?>
	</div>
</body>