
<!DOCTYPE html>
<html>
<head>
	<title>Tout Parcourir</title>
	<meta charset="utf-8">
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="parcourir.css">
	<link rel="stylesheet"
	 href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
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
				 <li class="nav-item"><a class="nav-link" href="Notifications.php">Notifications</a></li>
				 <li class="nav-item"><a class="nav-link" href="Panier.php">Panier</a></li>
				 <li class="nav-item"><a class="nav-link" href="index.html">Votre Compte</a></li>
			 </ul>
		 </div>
 	</nav>

 		  <h2>Articles</h2>
			<div id="myBtnContainer">
			 
			  <form action="parcourir.php" method="post">
			  	 <button class="btn active" name="toutVoir" >Tout voir</button>
			  	 <button class="btn" name="meilleur"> Meilleur Offre</button>
				 <button class="btn" onclick="filterSelection('transaction')"> Transaction client-vendeur</button>
			 	 <button class="btn" onclick="filterSelection('achat')"> Achat immédiat</button>
				
			</form>
			 
			</div>
 
			
<!---------------PHP--------------------------------->

<div class="row">
	<div class="content">
<?php

$database = "eceshop";
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

if (isset($_POST["toutVoir"])) {
if ($db_found) {
$sql = "SELECT * FROM articles";

$result = mysqli_query($db_handle, $sql);


if (mysqli_num_rows($result) == 0) {
} else {

while ($data = mysqli_fetch_assoc($result)) {

echo '<img src = "data:image/jpd;base64,' . base64_encode($data['image']) . '" width = "300px" height = "300px"/>';
echo '<br>';
echo $data['nom'];
echo '<br>';
echo $data['prix']." €";
echo '<br>';
echo $data['description'];
}
}
} else {
echo "Database not found";
}
}

mysqli_close($db_handle);
?>
</div>
</div>







<!----RRR-----
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
----->

</body>
</html>