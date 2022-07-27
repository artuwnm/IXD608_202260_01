<?php
include_once "lib/php/functions.php";
?>    


<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
		<h1>Nana's Fashion Store</h1>
		</div>
	<div class="flex-stretch"></div>
	 <nav class="flex-none nav">
      		<ul class="container display-flex">
      			<li><a href="index.html">Home</a></li>
      			<li><a href="product_list.php">Collection</a></li>
      			<li><a href="about.php">About</a></li>
      			 <li><a href="product_cart.php">
                     <span>Cart</span>
                     <span class="badge"><?= makeCartBadge(); ?></span>
                     </a>
                 </li>
                
                      <li><a href="product_checkout.php">Checkout</a></li>
            </ul>
      </nav>
    </div>
</header>