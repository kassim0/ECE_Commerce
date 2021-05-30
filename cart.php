<?php 

session_start();
require_once ("php/Createdb.php");
require_once ("php/component.php");

$db = new Createdb("Productdb", "Producttb");

if (isset($_POST['remove'])) {
	if ($_GET['action']=='remove') {
		foreach ($_SESSION['cart'] as $key => $value) {
			if ($value['product_id'] == $_GET['id']) {
				unset($_SESSION['cart'][$key]);
				echo "<script>alert('Product has been Removed...!')</script>";
				echo "<script>window.location ='cart.php'</script>";
			}
		}
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

</head>
<body class="bg-light">


<?php 
require_once('php/header.php');
 ?>

<div class="container-fluid">
	<div class="row px-5">
		<div class="col-md-7">
			<div class="shopping-cart">
				<h6>My Cart</h6>
				<hr>
				
				<?php 

				$total = 0;


				if (isset($_SESSION['cart'])) {
					$product_id = array_column($_SESSION['cart'], 'product_id');

				$result = $db->getData();
				while ($row = mysqli_fetch_assoc($result)) {
					foreach ($product_id as $id) {
						if ($row['id']== $id) {
							cartElement($row['product_image'], $row['product_name'],$row['produc_price'], $row['id']);
							$total = $total + (int)$row['produc_price']; 
						}
					}
				}
				}else{
					echo"<h5>Cart is Empty</h5>";
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
						if (isset($_SESSION['cart'])) {
							$count = count($_SESSION['cart']);
							echo "<h6>Price($count items)</h6>";
						}else{
							echo "<h6>Price(0 items)</h6>";
						}

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



















<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="https://code.jquery-3.3.1.slim.min.js"></script>

</body>
</html>