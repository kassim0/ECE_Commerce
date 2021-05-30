<?php
$cartArticles = selectCartProductForUser(1);
$itemCount = count($cartArticles);
?>

<header id="header">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a href="../Acceuil.php" class="navbar-brand">
			<h3 class="px-5">
				<i class="fas fa-shopping-basket"> Shopping Cart</i>
			</h3>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="mr-auto"></div>
			<div class="navbar-nav">
				<a href="cart.php" class="nav-item nav-link active">
					<h5 class="px-5 cart">
						<i class="fas fa-shopping-basket border rounded-circle p-2 "></i> Panier
						<?php

						echo "<span id=\"cart_count\" class=\"text-danger bg-light\">$itemCount</span>";

						?>
					</h5>
				</a>
			</div>
		</div>

	</nav>
</header>