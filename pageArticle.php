
<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page Article</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"
	 href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="pageArticle.css">
	<link rel="stylesheet" type="text/css" href="pageacheteur.css">
<style type="text/css">
#presentation h1{
text-align: center;
text-decoration: underline;
}


#description{
    background: black;
    margin-top: 30px;
    color: white;
    border-radius: 20px;
    font-size: 30px;
    height: 300px;
    margin-bottom: 20px;
}

.panier {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
  margin-left: 50%;
  margin-bottom: 30px;
  background-color: #ddd;
    background-color: #666;
   color: white;
}

#presentaion button{

border-radius: 30px;

}

.panier{
border-radius: 30px;
background: linear-gradient(#33FFFF, #3355FF);
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


<section id="presentation">
	<h1>Titre de l'article</h1>
	<div class="container">
		<div class="row">
				<img src="image/vip2.jpg" alt="image" style="width:100%">
				<div class="container" id="description">
						<p>Voiture lamborghini aventador en très bonne état</p>
				</div>
				<div class="container" id="Prix">
						<h2>1000000$</h2>
						<button type="submit" class="panier" name="panier"><a href="panier.php">Ajouter au panier</button>
				</div>
		</div>
	</div>

</section>








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