<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Accueil</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="caroussel.css">
	<link rel="stylesheet"
	 href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
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


 	<!--Le carousel-->
 
	 <div id="carouselArticle" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image6.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image3.png" alt="Third slide">
    </div>
  </div>




	 	<a href="#carouselArticle" class="carousel-control-prev" role="button" data-slide="prev">
	 		<span class="carousel-control-prev-icon"></span>
	 	</a>
	 	<a href="#carouselArticle" class="carousel-control-next" role="button" data-slide="next">
	 		<span class="carousel-control-next-icon"></span>
	 	</a>

 	</div>
<!--Fin du carousel-->

 	<!--la description-->

 	<main>
 		<div class="container">
 			<div class="row">

 				<div class="col-lg-4" id="leftPart">  <!--prend 4 colonnes sur 12-->
 					<h1><i class="	fas fa-school icone"></i></h1>
 					<!--<img src="./image/caddie.png" alt="caddie">-->
 					<div class="container">
 						<div class="row element">
 							<div class="col-lg-8">
 								<p>Site de e-commerce en ligne entre étudiants de l'ECE</p>
 							</div>
 						</div>

 					</div>
 				</div> 

 				<div class="col-lg-4" id="centerPart">
 					<h1><i class="fa fa-search icone"></i></h1>
 					<!--<img src="./image/loupe.png" alt="loupe">-->
 					<div class="container">
 						<div class="row element">
 							<div class="col-lg-8">
 								<p>3 catégorie d'articles disponibles: Meubles et objets d'art, Accessoire VIP, et Matériel scolaire</p>
 							</div>
 						</div>

 					</div>

 				</div>

 				<div class="col-lg-4" id="rightPart">
 					<h1><i class="fas fa-handshake icone"></i></h1>
 					<!--<img src="./image/poignée de main.png" alt="achat">-->
 					<div class="container">
 						<div class="row element">
 							<div class="col-lg-8">
 								<p>3 moyens de paiment: achat immédiat, négociation ou enchère</p>
 							</div>
 						</div>

 					</div>



 				</div>
 			</div>
 		</div>
 	</main>
 	<!--Fin de la description-->



<!--Section articles du jour-->
<!--
<section id="new">
	<h1 id="nouveau">Nouveaux articles</h1>
	<div class="container">
		<div class="row">

			<div class="col-lg-4" id="articlegauche">
			<div class="container">
				<div class="row element">

					<div class="col-lg-8">
						<p class="p">Un artice à xx$</p>
					</div>
					<div class="col-lg-8">
						<p class="p">Un artice à xxx$</p>
					</div>
					<div class="col-lg-8">
						<p class="p">Un artice à xx$</p>
					</div>
					<div class="col-lg-8">
						<p class="p">Un artice à xxx$</p>
					</div>
				</div>
			</div>
			</div>

			<div class="col-lg-4" id="articlegauche">
			<div class="container">
				<div class="row element">

					<div class="col-lg-8">
						<p class="p">Un artice à xx$</p>
					</div>
					<div class="col-lg-8">
						<p class="p">Un artice à xxx$</p>
					</div>
					<div class="col-lg-8">
						<p class="p">Un artice à xx$</p>
					</div>
					<div class="col-lg-8">
						<p class="p">Un artice à xxx$</p>
					</div>
				</div>
			</div>
			</div>

			<div class="col-lg-4" id="articlegauche">
			<div class="container">
				<div class="row element">

					<div class="col-lg-8">
						<p class="p">Un artice à xx$</p>
					</div>
					<div class="col-lg-8">
						<p class="p">Un artice à xxx$</p>
					</div>
					<div class="col-lg-8">
						<p class="p">Un artice à xx$</p>
					</div>
					<div class="col-lg-8">
						<p class="p">Un artice à xxx$</p>
					</div>
				</div>
			</div>
			</div>
		</div>

	</div>

</section> 	-->

<!--fin article du jour-->
<section id="new">
	<h1 id="nouveau">Nouveaux articles</h1>
<div class="container">
<div class="row">

  <div class="col-lg-4">
    <div class="content">
      <img src="image1.png" alt="image" style="width:100%">
      <h4>Image6</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="content">
      <img src="image4.png" alt="image" style="width:100%">
      <h4>image7</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="content">
      <img src="image3.png" alt="Image" style="width:100%">
      <h4>Image3</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="content">
      <img src="image5.jpg" alt="image" style="width:100%">
      <h4>Image5</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>

   <div class="col-lg-4">
    <div class="content">
      <img src="image5.jpg" alt="image" style="width:100%">
      <h4>Image5</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>

   <div class="col-lg-4">
    <div class="content">
      <img src="image5.jpg" alt="image" style="width:100%">
      <h4>Image5</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>

	</div>
	</div>
</section>
<!--Fin section de jour-->



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

