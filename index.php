<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>ECE Store</title>
	<meta charset="utf-8">
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="firstpage.css">
	<link rel="stylesheet"
	 href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
	<script type="text/javascript">
 			$(document).ready(function(){
 			$('.header').height($(window).height());
 			});
 			
	</script> 
	
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
				 <li class="nav-item"><a class="nav-link" href="Panier.php">Panier</a></li>
				 <li class="nav-item"><a class="nav-link" href="index2.php">Votre Compte</a></li>
			 </ul>
		 </div>
 	</nav>
 	<header class="page-header header container-fluid">
		<div class="overlay"> </div>
		<div class="description">
 			<h1>Bienvenue sur <br></h1>
 			<img src="logoShopECE.png" alt="ECE">
 			<p>
				Le site pour tous vos achats en ligne!
			</p> 
		</div>
	</header>
	<div class="section" >
	<center>
		<br>
		<h5 class="text-uppercase font-weight-bold ">Contact</h5>
		<p>
		 37, quai de Grenelle, 75015 Paris, France<br>
		<a href="mailto:ece.marketplace@gmail.com">ece.marketplace@gmail.com</a> <br>
		+33 01 02 03 04 05 <br>
		</p>
		<br>
	</center>
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
</body>
</html>