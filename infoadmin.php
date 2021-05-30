<?php
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mes informations</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"
	 href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="pageArticle.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
.container{
margin-top: 50px;

}



</style>
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



<!-- Formulaire -->

<div class="container">
    <div class="b-logo swift_right">
        <img src="logoShopECE.png" class="img-fluid" style="width: 100px; height: 50px;">
    </div>
    <div class="b-form text-center">
        <div class="b-form-title">
            <h1 class="form_title">Mes informations</h1>
        </div>
        <form method="post" action="modifications.php">
            <div class="form-group username">
                <h3>Nom: <?php echo $_SESSION['nom']?></h3>
                <!-- <i class="fas fa-user b-font"></i> -->
            </div>
            <div class="form-group username">
                <h3>Prenom: <?php echo $_SESSION['prenom']?></h3>
                <!-- <i class="fas fa-user b-font"></i> -->
            </div>
            <div class="form-group">
                <h3>Email: <?php echo $_SESSION['email']?></h3>
                <!-- <i class="fas fa-envelope b-font"></i> -->
            </div>
            <div class="form-group">
                <h3>Mot de passe: <?php echo $_SESSION['mdp']?></h3>
                <!-- <i class="fas fa-unlock-alt b-font"></i> -->
            </div>
            <div class="form-group">
                <span class="b-forgot"></span>
            </div>
            <!-- <button type="submit" name="enregistre" class="sign_up" >Retour</button> -->
        </form>
    </div>

</div>







</body>
</html>


