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
	<link rel="stylesheet" type="text/css" href="style.css">
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
				 <li class="nav-item"><a class="nav-link" href="Notif.php">Notifications</a></li>
				 <li class="nav-item"><a class="nav-link" href="Panier.php">Panier</a></li>
				 <li class="nav-item"><a class="nav-link" href="index2.php">Votre Compte</a></li>
			 </ul>
		 </div>
 	</nav>



<div class="container">
    <div class="b-logo swift_right">
        <img src="logoShopECE.png" class="img-fluid" style="width: 100px; height: 50px;">
    </div>
    <div class="b-form text-center">
        <div class="b-form-title">
            <h1 class="form_title">Ajouter un article</h1>
        </div>

        <form method="post" action="vendrearticle1.php">
            <div class="form-group username">
                <input class="form-control" type="text" name="nom" placeholder="Nom">
                <i class="fas fa-user b-font"></i>
            </div>
            <div class="form-group username">
                <input class="form-control" type="number" name="prix" placeholder="Prix">
                <i class="fas fa-euro-sign b-font"></i>
            </div>
            <div class="form-group username">
                <input class="form-control" type="file" name="photo" placeholder="photo">
                <i class="fa fa-camera b-font"></i>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="categorie" placeholder="categorie">
                <i class="fas fa-th-list b-font"></i>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="achat" placeholder="Type d'achat">
                <i class="fas fa-money-check b-font"></i>
            </div>
            <div class="form-group">
                <textarea id="subject" name="description" placeholder="Ecrivez la description.." style="height:100px"></textarea>
                <i class="	fa fa-clipboard b-font"></i>
            </div>
            <div class="form-group">
                <span class="b-forgot"></span>
            </div>
            <button type="submit" name="ajout" class="sign_up">Ajouter</button>
            <button type="submit" name="supp" class="sign_up">Supprimer</button>
        </form>

    </div>
</div> 





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