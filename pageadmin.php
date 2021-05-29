<?php
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Votre compte</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"
	 href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="pageArticle.css">
	<link rel="stylesheet" type="text/css" href="pageacheteur.css">
</head>
<body>
	<!--la navigation-->
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
				 <li class="nav-item"><a class="nav-link" href="Notifications.php">Notifications</a></li>
				 <li class="nav-item"><a class="nav-link" href="Panier.php">Panier</a></li>
				 <li class="nav-item"><a class="nav-link" href="index2.php">Votre Compte</a></li>
			 </ul>
		 </div>
 	</nav>

 	<!-- La photo de profil -->
 	<main>
 		<div class="container" >
 			<div class="row">

 				<div class="col-lg-5" id="leftPart" >
 					<h1>Compte Administrateur</h1>
 					<div class="container">
 						<div class="row element">
 							<div class="col-lg-8">
 								<img src="./image/pdpdefaut.png" alt="pdp">
 								<h4><?php echo $_SESSION['pseudo'];  ?></h4>
 							</div>
 						</div>
 					</div>
 				</div>

 				<div class="col-lg-5 b-form text-center">
 					<button type="submit" class="ajout" name="ajouter">Ajouter un article</button>
 				</div>
 			</div>
 		</div>

 		<section id="contanier2">
 		<div class="container" >
 			<div class="row">

 				<div class="col-lg-4">  
 					<h1><i class="fas fa-user-alt icone"></i></h1>
 					<p>Mes informations</p>
 				</div>

 				<div class="col-lg-4">  
 					<h1><i class="	fas fa-money-check icone"></i></h1>
 					<p>Mes coordonnées bancaire</p>
 				</div>

 				<div class="col-lg-4">  
 					<h1><i class="fas fa-handshake icone"></i></h1>
 					<p>Mes ventes</p>
 				</div>

 				<div class="col-lg-4">  
 					<h1><i class="fas fa-user-alt-slash icone"></i></h1>
 					<p>Supprimer un vendeur</p>
 				</div>
 			</div>
 		</div>
 		</section>
 	</main>


 	<footer class="page-footer  ">
		 <div class="container">
			 <div class="row">
				 <div class="col-lg-8 col-md-8 col-sm-12">
				 	
				 </div>
				</div>
			 <div class="footer-copyright text-center">Copyright &copy; 2021 ECE Store
			 
		</div>
	</footer>

</body>
</html>