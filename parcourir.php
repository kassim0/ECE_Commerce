<?php
require("configuration/commandes.php");
session_start();
$Articles = afficher();

if (isset($_POST['add'])) {
	$cartArticles = selectCartProductForUser(1);
	$productAlreadyExistsArray = array_filter($cartArticles, function ($article) {
		return $article->id == $_POST['product_id'];
	});
	print_r($cartArticles);
	print_r($productAlreadyExistsArray);
	if (count($productAlreadyExistsArray) > 0) {
		echo "<script>alert('Product is already added in the cart..!')</script>";
		echo "<script>window.location = 'index.php'</script>";
	} else {
		$count = count($_SESSION['cart']);
		$item_array = array(
			'product_id' => $_POST['product_id']
		);

		$_SESSION['cart'][$count] = $item_array;
		addProductToCart($_POST['product_id'], 1);
		//print_r($_SESSION['cart']);
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Tout Parcourir</title>
	<meta charset="utf-8">
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="parcourir.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body>
	<nav class="navbar navbar-expand-md">
		<a class="navbar-brand" href="index.php">
			<div class="b-logo swift_left">
				<img src="logoShopECE.png" alt="ECE Store" class="img-fluid" width="150" height="200">
			</div>
		</a>
		<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="main-navigation">
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link" href="Acceuil.php">Accueil</a></li>
				<li class="nav-item"><a class="nav-link" href="parcourir.php">Tout Parcourir</a></li>
				<li class="nav-item"><a class="nav-link" href="Notif.php">Notifications</a></li>
				<li class="nav-item"><a class="nav-link" href="cart-component/cart.php">Panier</a></li>
				<li class="nav-item"><a class="nav-link" href="index2.php">Votre Compte</a></li>
			</ul>
		</div>
	</nav>

	<h2 id="t">Tous les articles</h2>
	<div id="myBtnContainer">

		<form action="parcourir.php" method="post">
			<button class="btn active" name="toutVoir">Tout voir</button>
			<button class="btn" name="meilleur"> Meilleur Offre</button>
			<button class="btn" name="transaction"> Transaction client-vendeur</button>
			<button class="btn" name="achat"> Achat immédiat</button>
			<button class="btn" name="meubles"> Meubles et objets d'art</button>
			<button class="btn" name="accessoire"> Accessoire VIP</button>
			<button class="btn" name="materiels"> Matériels scolaires</button>
		</form>

	</div>

	<div class="row">

		<?php foreach ($Articles as $article) : ?>

			<div class="col-md-3 col-sm-6 my-3 my-md-0">
				<form action="parcourir.php" method="POST">
					<div class="card shadow item-container">
						<!-- <img src="data:image/png;base64,'.base64_encode(<?= $article->image ?>).'" alt="img" class="img-fluid card-img-top"> -->
						<div class="card-body">
							<h5 class="card-title"><?= $article->nom ?></h5>
							<h6>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="far fa-star"></i>
							</h6>
							<p class="card-text">
								<?= $article->description ?>
							</p>
							<h5>
								<small><s class="text-secondary">299£</s></small>
								<span class="price"><?= $article->prix ?></span>
							</h5>

							<button type="submit" name="add" class="btn btn-danger my-3">
								Add to Cart
								<i class="fas fa-shopping-cart"></i>
							</button>
							<input type='hidden' name='product_id' value="<?= $article->id ?>">
						</div>
					</div>
				</form>
			</div>
		<?php endforeach ?>

	</div>


	<!---------------PHP--------------------------------->



	<?php


	$database = "eceshop";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	if (isset($_POST["toutVoir"])) {
		if ($db_found) {
			$sql = "SELECT * FROM articles";

			$result = mysqli_query($db_handle, $sql);


			if (mysqli_num_rows($result) != 0) {

				echo '<div class="container">';
				echo '<div class="row">';

				while ($data = mysqli_fetch_assoc($result)) {

					echo	'<div class="col-lg-4">';
					echo		'<div class="content">';
					echo			'<a class="article" href="pageArticle.php">';
					echo		 	'<img src = "data:image/jpd;base64,' . base64_encode($data['image']) . '" width = "75%"/>';
					echo           '</a>';
					echo		 '<h5>' . $data['nom'] . '</h5>';
					echo		$data['prix'] . '€';
					echo 		'<button type="submit" name="add" class="btn btn-danger my-3">Ajouter au panier <i class="fas fa-shopping-cart"></i></button>';
					echo         '<input type="hidden" name="idarticle" >';

					echo		'</div>';
					echo	'</div>';
				}
				echo 	'</div>';
				echo '</div>';
			}
		} else {
			echo "Database not found";
		}
	}

	if (isset($_POST["meilleur"])) {
		if ($db_found) {
			$sql = "SELECT * FROM articles WHERE articles.modedachat = 'enchere'";

			$result = mysqli_query($db_handle, $sql);


			if (mysqli_num_rows($result) == 0) {
			} else {

				echo '<div class="container">';
				echo '<div class="row">';

				while ($data = mysqli_fetch_assoc($result)) {

					echo	'<div class="col-lg-4">';
					echo		'<div class="content">';
					echo			'<a class="article" href="pageArticle.php">';
					echo		 	'<img src = "data:image/jpd;base64,' . base64_encode($data['image']) . '" width = "75%"/>';
					echo           '</a>';
					echo		 '<h5>' . $data['nom'] . '</h5>';
					echo		$data['prix'] . '€';
					echo 		'<button type="submit" name="add" class="btn btn-danger my-3">Ajouter au panier <i class="fas fa-shopping-cart"></i></button>';
					echo         "<input type='hidden' name='idarticle' >";

					echo		'</div>';
					echo	'</div>';
				}
				echo 	'</div>';
				echo '</div>';
			}
		} else {
			echo "Database not found";
		}
	}

	if (isset($_POST["transaction"])) {
		if ($db_found) {
			$sql = "SELECT * FROM articles WHERE articles.modedachat = 'negociation'";

			$result = mysqli_query($db_handle, $sql);


			if (mysqli_num_rows($result) == 0) {
			} else {

				echo '<div class="container">';
				echo '<div class="row">';

				while ($data = mysqli_fetch_assoc($result)) {

					echo	'<div class="col-lg-4">';
					echo		'<div class="content">';
					echo			'<a class="article" href="pageArticle.php">';
					echo		 	'<img src = "data:image/jpd;base64,' . base64_encode($data['image']) . '" width = "75%"/>';
					echo           '</a>';
					echo		 '<h5>' . $data['nom'] . '</h5>';
					echo		$data['prix'] . '€';
					echo 		'<button type="submit" name="add" class="btn btn-danger my-3">Ajouter au panier <i class="fas fa-shopping-cart"></i></button>';
					echo         "<input type='hidden' name='idarticle' >";

					echo		'</div>';
					echo	'</div>';
				}
				echo 	'</div>';
				echo '</div>';
			}
		} else {
			echo "Database not found";
		}
	}

	if (isset($_POST["achat"])) {
		if ($db_found) {
			$sql = "SELECT * FROM articles WHERE articles.modedachat = 'payementimmediat'";

			$result = mysqli_query($db_handle, $sql);


			if (mysqli_num_rows($result) == 0) {
			} else {

				echo '<div class="container">';
				echo '<div class="row">';

				while ($data = mysqli_fetch_assoc($result)) {

					echo	'<div class="col-lg-4">';
					echo		'<div class="content">';
					echo			'<a class="article" href="pageArticle.php">';
					echo		 	'<img src = "data:image/jpd;base64,' . base64_encode($data['image']) . '" width = "75%"/>';
					echo           '</a>';
					echo		 '<h5>' . $data['nom'] . '</h5>';
					echo		$data['prix'] . '€';
					echo 		'<button type="submit" name="add" class="btn btn-danger my-3">Ajouter au panier <i class="fas fa-shopping-cart"></i></button>';
					echo         "<input type='hidden' name='idarticle' >";

					echo		'</div>';
					echo	'</div>';
				}
				echo 	'</div>';
				echo '</div>';
			}
		} else {
			echo "Database not found";
		}
	}

	if (isset($_POST["meubles"])) {
		if ($db_found) {
			$sql = "SELECT * FROM articles WHERE articles.categorie = 'meuble'";

			$result = mysqli_query($db_handle, $sql);


			if (mysqli_num_rows($result) == 0) {
			} else {

				echo '<div class="container">';
				echo '<div class="row">';

				while ($data = mysqli_fetch_assoc($result)) {

					echo	'<div class="col-lg-4">';
					echo		'<div class="content">';
					echo			'<a class="article" href="pageArticle.php">';
					echo		 	'<img src = "data:image/jpd;base64,' . base64_encode($data['image']) . '" width = "75%"/>';
					echo           '</a>';
					echo		 '<h5>' . $data['nom'] . '</h5>';
					echo		$data['prix'] . '€';
					echo 		'<button type="submit" name="add" class="btn btn-danger my-3">Ajouter au panier <i class="fas fa-shopping-cart"></i></button>';
					echo         "<input type='hidden' name='idarticle' >";

					echo		'</div>';
					echo	'</div>';
				}
				echo 	'</div>';
				echo '</div>';
			}
		} else {
			echo "Database not found";
		}
	}

	if (isset($_POST["accessoire"])) {
		if ($db_found) {
			$sql = "SELECT * FROM articles WHERE articles.categorie = 'accessoireVIP'";

			$result = mysqli_query($db_handle, $sql);


			if (mysqli_num_rows($result) == 0) {
			} else {

				echo '<div class="container">';
				echo '<div class="row">';

				while ($data = mysqli_fetch_assoc($result)) {

					echo	'<div class="col-lg-4">';
					echo		'<div class="content">';
					echo			'<a class="article" href="pageArticle.php">';
					echo		 	'<img src = "data:image/jpd;base64,' . base64_encode($data['image']) . '" width = "75%"/>';
					echo           '</a>';
					echo		 '<h5>' . $data['nom'] . '</h5>';
					echo		$data['prix'] . '€';
					echo 		'<button type="submit" name="add" class="btn btn-danger my-3">Ajouter au panier <i class="fas fa-shopping-cart"></i></button>';
					echo         "<input type='hidden' name='idarticle' >";

					echo		'</div>';
					echo	'</div>';
				}
				echo 	'</div>';
				echo '</div>';
			}
		} else {
			echo "Database not found";
		}
	}

	if (isset($_POST["materiels"])) {
		if ($db_found) {
			$sql = "SELECT * FROM articles WHERE articles.categorie = 'materielscolaire'";

			$result = mysqli_query($db_handle, $sql);


			if (mysqli_num_rows($result) == 0) {
			} else {

				echo '<div class="container">';
				echo '<div class="row">';

				while ($data = mysqli_fetch_assoc($result)) {

					echo	'<div class="col-lg-4">';
					echo		'<div class="content">';
					echo			'<a class="article" href="pageArticle.php">';
					echo		 	'<img src = "data:image/jpd;base64,' . base64_encode($data['image']) . '" width = "75%"/>';
					echo           '</a>';
					echo		 '<h5>' . $data['nom'] . '</h5>';
					echo		$data['prix'] . '€';
					echo 		'<button type="submit" name="add" class="btn btn-danger my-3">Ajouter au panier <i class="fas fa-shopping-cart"></i></button>';
					echo         "<input type='hidden' name='idarticle' >";

					echo		'</div>';
					echo	'</div>';
				}
				echo 	'</div>';
				echo '</div>';
			}
		} else {
			echo "Database not found";
		}
	}



	mysqli_close($db_handle);
	?>



	<footer class="page-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12">

				</div>
			</div>
			<div class="footer-copyright text-center">Copyright &copy; 2021 ECE Store

			</div>
	</footer>


	<script src="parcourir.js"></script>
</body>

</html>