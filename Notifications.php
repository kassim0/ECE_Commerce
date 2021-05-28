<?php 
	session_start()
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Notifications</title>
	<meta charset="utf-8">
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="firstpage.css">
	<link rel="stylesheet" type="text/css" href="Notifications.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
	<script type="text/javascript">
 			$(document).ready(function(){
 			$('.header').height($(window).height());
 			});
 			
	</script> 
	<!-- <style type="text/css">
		h1 {
			text-align: center;
			color: white;
			background-color: blue;
			padding: 20px;
			width: 650px;
			margin: 0 auto 20px auto;
			border-radius: 5px;
		}
		table {
			width: 680px;
			margin: auto;
		
		}
	</style> -->
	
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
				 <li class="nav-item"><a class="nav-link" href="Notifications.php">Notifications</a></li>
				 <li class="nav-item"><a class="nav-link" href="Panier.php">Panier</a></li>
				 <li class="nav-item"><a class="nav-link" href="index2.php">Votre Compte</a></li>
			 </ul>
		 </div>
 	</nav>
 	<h1>Vos critères</h1>
 	<form method="post" action="Notif.php">
 	<table border="1">
 	<tr>
		<td>Que recherchez-vous ?:</td>
		<td>
			 <input type="radio" name="choix" value="1">Meubles<br>
			 <input type="radio" name="choix" value="2">Ordinateurs<br>
			 <input type="radio" name="choix" value="3">Colliers<br>
			 <input type="radio" name="choix" value="4">Voitures<br>
			 <input type="radio" name="choix" value="5">Tableaux<br>
			 <input type="radio" name="choix" value="6">Cahier<br>
			 <input type="radio" name="choix" value="7">Montres<br>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			 <input type="submit" name="button1" value="Soumettre">
		</td>
	</tr>
	</table>
	</form>


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