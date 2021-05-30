<?php
require("configuration/commandes.php");
session_start();

$Articles = afficher();
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

	<h2>Articles</h2>
	<div id="myBtnContainer">
		<button class="btn active" onclick="filterSelection('all')">Tout voir</button>
		<button class="btn" onclick="filterSelection('meilleur')"> Meilleur Offre</button>
		<button class="btn" onclick="filterSelection('transaction')"> Transaction client-vendeur</button>
		<button class="btn" onclick="filterSelection('achat')"> Achat immédiat</button>
	</div>


	<div class="row">

		<?php foreach ($Articles as $article) : ?>
			<div class="column meilleur">
				<div class="content">
					<img src="<?= $article->image ?>" alt="image" style="width:100%">
					<h4><?= $article->nom ?></h4>
					<p><?= $article->description ?></p>
					<div class="btn-group">
						<button type="button" class="btn btn-sm btn-outline-secondary">Pauer</button>
					</div>
					<small class="text-muted"><?= $article->prix ?></small>
				</div>
			</div>
		<?php endforeach ?>

	</div>

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