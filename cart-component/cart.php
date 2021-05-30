<?php

require("../configuration/commandes.php");
require_once('component.php');
session_start();
$cartArticles = selectCartProductForUser(1);
$itemCount = count($cartArticles);

if (isset($_POST['remove'])) {
	if ($_GET['action'] == 'remove') {
		removeProductFromCart($_GET['id'], 1);
	}
}



?>


<!DOCTYPE html>
<html lang="en">
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cart</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">

	<!-- Bootstrap CDN-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

	<!--Font Awsome -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
	<!--Notre lien CSS-->
	<link rel="stylesheet" type="text/css" href="style.css">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
	<script type="https://code.jquery-3.3.1.slim.min.js"></script>

</head>

<body class="bg-light">

	<?php
	require_once('header.php');
	?>
	<div class="container-fluid">
		<div class="row px-5">
			<div class="col-md-7">
				<div class="shopping-cart">
					<h6>My Cart</h6>
					<hr>

					<?php

					$total = 0;

					if (count($cartArticles) > 0) {
						foreach ($cartArticles as $article) {
							cartElement($article->nom, $article->prix, $article->image, $article->id);
							$total = $total + $article->prix;
						}
					} else {
						echo "<h5>Cart is Empty</h5>";
					}
					?>

				</div>
			</div>
			<div class="col-md-4  offset-md-1 border rounded mt-5 bg-whit h-25">

				<div class="pt-4">
					<h6>PRICE DETAILS</h6>
					<hr>
					<div class="row price-details">
						<div class="col-md-6">
							<?php
							echo "<h6>Price($itemCount items)</h6>";
							?>
							<h6>Delivery Charges</h6>
							<hr>
							<h6>Amount Payable</h6>
						</div>
						<div class="col-md-6">
							<h6>£<?php echo $total; ?> </h6>
							<h6 class="text-success">FREE</h6>
							<hr>
							<h6>£<?php
									echo $total;
									?> </h6>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>

</body>

</html>