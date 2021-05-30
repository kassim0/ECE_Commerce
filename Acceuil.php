<?php
    session_start();
?>

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
	<style type="text/css">

body {
  padding: 0px;
  margin: 0px;
  background: white;
  height: 100vh;
}
/*--- navigation bar ---*/
.navbar {
  background: #1c1c1c;
}
.nav-link,
.navbar-brand {
  color: #ffffff;
  cursor: pointer;
}
.nav-link {
  margin-right: 1em !important;
}
.nav-link:hover {
  color: #000;
}
.navbar-collapse {
  justify-content: flex-end;
}

#carouselArticle {
  width: 100%;
  margin: 10px;
}

.carousel-item {
  width: 100%;
  height: 400px;
  margin-bottom: 40px;
  background-repeat: no-repeat;
  background-size: contain;
  background-position: center;

}

.carousel-item img {
  margin: 10px;
  float: center;
  background-repeat: no-repeat;
  background-size: contain;
  background-position: center;
  height: 500px;
}

.col-lg-4 {
  margin-top: 60px;
}

.icone {
  display: inline-block;
  font-size: 32px;
  margin-bottom: 16px;
  color: #000;
  padding: 8px 16px;
}

#new {
  background: black;
  margin-top: 30px;
  color: white;
}

#nouveau {
  text-align: center;
}

.section {
  background-color: #d8d8d8;
}

.section a {
  color: black;
}

.page-footer {
  background-color: #1c1c1c;
  color: #ffffff;
  padding: 15px 0 20px;
}
.footer-copyright {
  color: #666;
  padding: 10px 0;
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
				 <li class="nav-item"><a class="nav-link" href="Notif.php">Notifications</a></li>
				 <li class="nav-item"><a class="nav-link" href="Panier.php">Panier</a></li>
				 <li class="nav-item"><a class="nav-link" href="index2.php">Votre Compte</a></li>
			 </ul>
		 </div>
 	</nav>


 	<!--Le carousel-->
 
	 <div id="carouselArticle" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" style= "background-image: url('image/cahier oxford.jpg');" >
    </div>
    <div class="carousel-item" style="background-image: url('image/vip1.png');" >
    </div>
    <div class="carousel-item" style="background-image: url('image/meuble2.jpg');"  > 
    </div>
  </div>




	 	<a href="#carouselArticle" class="carousel-control-prev " role="button" data-slide="prev">
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



<!--fin article du jour-->
<form action="Session.php" method="post" >
<section id="new">
	<h1 id="nouveau">Nouveaux articles</h1>
<div class="container">
<div class="row">

<?php 

try{
$database = "eceshop";
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

if ($db_found) { 
$sql = "SELECT * FROM articles LIMIT 6 ";

$result = mysqli_query($db_handle, $sql);


if (mysqli_num_rows($result) == 0) {
} else {

while ($data = mysqli_fetch_assoc($result)) {
	
echo('
		<div class="col-lg-4">
    <div class="content">
	
      <img src="data:image/jpd;base64,'. base64_encode($data['image']) . '" alt="image" style="width:100%">
      <h4>'.$data['nom'].'</h4>
      <p>'.$data['prix'].'€</p>
	  
	  
	  <button type="submit" href="Panier.php" name="id" value="'.$data['id'].'" class="btn btn-danger my-3">Ajouter au panier <i class="fas fa-shopping-cart"></i></button>
	  
    </div>
  </div>'
	);
}
}
}
}

catch(Exception $e){
echo 'console.log('.$e->getMessage().')';

}

?>
 </div>
</div>
</section>
</form>
<!--Fin section de jour-->


<div class="section" style="text-align: center;" >

		<br>
		<h5 class="text-uppercase font-weight-bold ">Contact</h5>
		<p>
		 37, quai de Grenelle, 75015 Paris, France<br>
		<a href="mailto:ece.marketplace@gmail.com">ece.marketplace@gmail.com</a> <br>
		+33 01 02 03 04 05 <br>
		</p>
		<br>
	
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