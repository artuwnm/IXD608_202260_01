<?php
include_once "lib/php/functions.php";
include_once "parts/templates.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Nana Store</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="lib/css/styleguide.css">
   <link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="css/storetheme.css">


</head>
<body class="flush">
<body style ="background-color:#edf2fb;">

	<!-- header>h1+p -->
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
		<h1>Nana's Fashion Store</h1>
		</div>
	<div class="flex-stretch"></div>
	 <nav class="flex-none nav">
      		<ul class="container display-flex">
      			<li class="active"><a href="index.html">Home</a></li>
      			<li><a href="product_list.php">Collection</a></li>
      			<li><a href="about.php">About</a></li>
      			<li><a href="cart.php">Cart</a></li>
      		</ul>
      	</nav> 
      	</div>	
	</header>


<!-- <div class="container">
	<div class="card soft">
	<h2>Grid</h2>
	<div class="grid gap xs-small md-medium">
		<div class="col-xs-6">column 6</div>
		<div class="col-xs-6">column 6</div>
	</div>

	<div class="grid gap">
		<div class="col-xs-4">column 4</div>
		<div class="col-xs-4">column 4</div>
		<div class="col-xs-4">column 4</div>

		<div class="col-xs-3">column 3</div>
		<div class="col-xs-3">column 3</div>
		<div class="col-xs-3">column 3</div>
		<div class="col-xs-3">column 3</div>
	</div>

	 <div class="grid ten gap">
		<div class="col-xs-2">column 2</div>
		<div class="col-xs-2">column 2</div>
		<div class="col-xs-2">column 2</div>
		<div class="col-xs-2">column 2</div>
		<div class="col-xs-2">column 2</div>
		</div>
	</div>
</div> -->


<!-- <div class="container">
	<div class="grid gap xs-small md-medium">
		<div class="col-xs-6 col-md-3">
			<div class="card soft">
				<img src="img/BBD.png" alt="" class="media-image"></div>
		</div>
		<div class="col-xs-6 col-md-3">
			<div class="card soft"><img src="img/BBD.png" alt="" class="media-image"></div>
		</div>
		<div class="col-xs-6 col-md-3">
			<div class="card soft"><img src="img/BBD.png" alt="" class="media-image"></div>
		</div>
		<div class="col-xs-6 col-md-3">
			<div class="card soft"><img src="img/BBD.png" alt="" class="media-image"></div>
		</div>
	</div>
</div> -->


<!-- <div class="container">
	<div class="card soft">
	<h2>Responsive Grid</h2>
	<div class="grid">
		<div class="col-xs-12 col-md-6">column 6</div>
		<div class="col-xs-12 col-md-6">column 6</div>
	</div>
	
	<div class="grid">
		<div class="col-xs-12 col-md-4 col-xl-3">column 4</div>
		<div class="col-xs-12 col-md-4 col-xl-6">column 4</div>
		<div class="col-xs-12 col-md-4 col-xl-3">column 4</div>

		<div class="col-xs-3">column 3</div>
		<div class="col-xs-3">column 3</div>
		<div class="col-xs-3">column 3</div>
		<div class="col-xs-3">column 3</div>

		<div class="col-xs-3">column 3</div>
		<div class="col-xs-6">column 6</div>
		<div class="col-xs-3">column 3</div>
		</div>
	</div>
</div> -->
     
     <!-- nav.nav>ul>li*4>a[href=#article$]>{link $} --> 	
      	
      
      	<div class="container">
      		<article id="article1" class="article">
      			<div class="display-flex flex-align-center">
      				<div class="flex-stretch">
      			<h2>Where dreams come true</h2>
      			</div>
      			<div class="flex-none">
      			</div>
      			</div>
      			<div class="article-body">
      				<p class="p1">An artisanal approach, unrivaled attention to detail, and universally flattering carefree forms have won the Spanish designer, Rosa Esteva, a faithful fashion following which seeks the brand’s feminine relaxed silhouettes for day and evening.</p>
      			</div>
      		</article>
      	</div>
      	<div class="view-window" style="background-image:url(img/C1.jpeg)">	
      	</div>

      	<div class="container">
      		<article id="article3" class="article">
      			<h2>Every dress has a story</h2>
      			<div class="article-body">
      				<p class="p2">With a signature style and exclusive prints, born from Rosa Esteva’s own watercolours, Cortana’s collections feel fresh, wearable and coolly Mediterranean.</p>
      			</div>
      		</article>
      	</div>
        <div class="view-window" style="background-image:url(img/C1.jpeg)">	
      	</div>
      	<div class="container">
      		<article id="article4" class="article">
      			<div class="article-body">
      				<p class="p3">Simplitcity, sustainability and a slow fashion philosophy are at the core of our brand. Using only natural materials of the highest quality, each longlasting garment is lovingly handcrafted with close attention to detail by skilled artisan hands in Barcelona.</p>
      			</div>
      		</article>
      	</div>
      	<div class="container">
		<h2>Popular Shorts</h2>
		<?php recommendedCategory("shorts"); ?>
		<h2>Popular Skirts</h2>
		<?php recommendedCategory("skirt"); ?>
	</div>
</body>
</html>